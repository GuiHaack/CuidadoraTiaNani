<?php
class SiteController
{

	var $dados;
	var $SiteModel;

	function __construct()
	{
		require_once("dados.php");
		$dados = new dados();
		$this->dados = $dados;

		require_once("models/site.php");
		$this->SiteModel = new SiteModel($dados);
		$site_url_atual = $_SERVER["REQUEST_URI"];
	}

	public function index()
	{
		$actual_link = $this->dados->site_url();

		$url = (isset($_GET['url'])) ? $_GET['url'] : 'em_breve';
		$url = array_filter(explode('/', $url));
		switch ($url[0]) {

			case 'em_breve':
				$this->em_breve();
				break;

			case 'home':
				$this->home();
				break;

			case 'novidades':
				$this->novidades();
				break;

			case 'galeria':
				$this->galeria();
				break;

			case 'enviar-contato':
				$this->enviarcontato();
				break;

			default:
				$this->erro404();
				break;
		}
	}

	public function em_breve()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		require_once("views/em-breve.php");
	}

	public function home()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		$novidades = $this->SiteModel->listnovidades();
		$galeria = $this->SiteModel->listgaleria();

		$tmp = 0;
		$tmp2 = 0;
		$tmp3 = 0;
		$slide1 = 0;
		foreach ($galeria as $item) if ($tmp3++ < 1) {
			$slide1 = $item['imagem'];
		}
		$tmp4 = 0;

		require_once("views/header.php");
		require_once("views/home.php");
		require_once("views/footer.php");
	}

	public function novidades()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		$novidades = $this->SiteModel->listnovidades();

		require_once("views/header-link.php");
		require_once("views/novidades.php");
		require_once("views/footer.php");
	}

	public function galeria()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		$galeria = $this->SiteModel->listgaleria();

		require_once("views/header-link.php");
		require_once("views/galeria.php");
		require_once("views/footer.php");
	}

	public function erro404()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		require_once("views/header.php");
		require_once("views/404.php");
		require_once("views/footer.php");
	}

	public function enviarcontato()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();

		if (isset($_POST['assunto']) and isset($_POST['email'])) {
			$contato = $this->SiteModel->adicionarcontato($_POST);
		}
		if ($contato === "spam") {
			require_once("views/header.php");
			require_once("views/nao-enviado.php");
			require_once("views/footer.php");
			echo "<meta http-equiv='refresh' content='5;URL=" . sprintf('%s', $_SERVER['HTTP_REFERER']) . "'/>";
		} else {
			if (is_null($contato)) {
				require_once("views/header.php");
				require_once("views/nao-enviado.php");
				require_once("views/footer.php");
				echo "<meta http-equiv='refresh' content='5;URL=" . sprintf('%s', $_SERVER['HTTP_REFERER']) . "'/>";
			} else if (isset($contato)) {
				$this->SiteModel->enviaemail($_POST);
				require_once("views/header.php");
				require_once("views/enviado.php");
				require_once("views/footer.php");
				// unset($_POST);
				echo "<meta http-equiv='refresh' content='5;URL=" . sprintf('%s', $_SERVER['HTTP_REFERER']) . "'/>";
			} else {
				require_once("views/header.php");
				require_once("views/nao-enviado.php");
				require_once("views/footer.php");
				echo "<meta http-equiv='refresh' content='5;URL=" . sprintf('%s', $_SERVER['HTTP_REFERER']) . "'/>";
			}
		}
	}

	public function painel()
	{
		echo "painel";
		// require_once("http://novatorres-com-br.umbler.net/painel/controllers/index.php");
	}
}

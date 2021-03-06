<?php

class PainelController

{
	var $dados;
	var $PainelModel;
	var $logado;

	function __construct()
	{
		require_once("../controllers/dados.php");
		$dados = new dados();
		$this->dados = $dados;
		require_once("models/painel.php");
		$this->PainelModel = new PainelModel($dados);
		$site_url_atual = $_SERVER["REQUEST_URI"];
	}
	public function index()
	{
		session_start();
		$url = (isset($_SERVER["REQUEST_URI"])) ? $_SERVER["REQUEST_URI"] : 'painel';
		$url = array_filter(explode('/', $url));
		if (!isset($_SESSION["login"])) {
			if (isset($url[2])) {
				switch ($url[2]) {
					case 'login':
						if (isset($url[3]) and isset($_SESSION["login"])) {
							switch ($url[2]) {
								case 'vl':
									$this->validateLogin();
									break;
								default:
									$this->login();
									break;
							}
						} else if (!isset($_SESSION["login"])) {
							// header("Location: /painel/login");
							$this->login();
						} else {
							header("Location: /painel/home");
							$this->home();
						}
						break;
					case 'vl':
						$this->validateLogin();
						break;
					case 'home':
						if (isset($_SESSION["login"]))
							$this->home();
						else
							header("Location: /painel/login");
						break;
					default:
						header("Location: /painel/login");
						break;
				}
			} else {
				header("Location: /painel/login");
			}
		} else {
			if (isset($url[2])) {
				switch ($url[2]) {
					case 'home':
						$this->home();
						break;

					case 'vl':
						$this->validateLogin();
						break;

					case 'sair':
						$this->sessionDestroy();
						break;

					case 'listar-galeria':
						$this->listargaleria();
						break;

					case 'adicionar-foto':
						if (isset($url[3])) {
							if ($url[3] == 'action')
								$this->adicionarprojetoaction();
						} else {
							$this->adicionarprojeto();
						}
						break;

					case 'editar-imagem':
						if (isset($url[4])) {
							if ($url[4] == 'action')
								$this->editarprojetoaction($url[3]);
						} else {
							$this->editarprojeto($url[3]);
						}
						break;

					case 'apagar-foto':
						if (isset($url[3]))
							$this->apagarprojeto($url[3]);
						else
							header("Location: /painel/listar/galeria");
						break;


					case 'listar-novidades':
						$this->listarnovidades();
						break;

					case 'adicionar-novidade':
						if (isset($url[3])) {
							if ($url[3] == 'action')
								$this->adicionarnovidadesaction();
						} else {
							$this->adicionarnovidades();
						}
						break;

					case 'editar-novidade':
						if (isset($url[4])) {
							if ($url[4] == 'action')
								$this->editarnovidadeaction($url[3]);
						} else {
							$this->editarnovidade($url[3]);
						}
						break;

					case 'apagar-novidades':
						if (isset($url[3]))
							$this->apagarnovidades($url[3]);
						else
							header("Location: /painel/listar/listar-novidades");
						break;

						//usu??rios

					case 'listar-usuarios':

						$this->listarusers();

						break;

					case 'adicionar-usuario':

						if (isset($url[3])) {

							if ($url[3] == 'action')

								$this->adicionaruseraction();
						} else {

							$this->adicionaruser();
						}

						break;

					case 'editar-usuario':

						if (isset($url[4])) {

							if ($url[4] == 'action')

								$this->editaruseraction();
						} else {

							$this->editaruser($url[3]);
						}

						break;

					case 'apagar-usuario':

						if (isset($url[3]))

							$this->apagaruser($url[3]);

						else

							header("Location: /painel/");

						break;

						//contatos

					case 'listar-contatos':

						$this->listarcontatos();

						break;

					case 'apagar-contato':

						if (isset($url[3]))

							$this->apagarcontato($url[3]);

						else

							header("Location: /painel/");

						break;

						// case 'listar-colaboradores': $this -> listarcolaboradores(); break;

						// case 'listar-colaboradores': $this -> listarcolaboradores(); break;



						//colaboradores

					case 'listar-colaboradores':

						$this->listarcolaboradores();

						break;

					case 'adicionar-colaborador':

						if (isset($url[3])) {

							if ($url[3] == 'action')

								$this->adicionarcolaboradoraction();
						} else {

							$this->adicionarcolaborador();
						}

						break;

					case 'editar-colaborador':

						if (isset($url[4])) {

							if ($url[4] == 'action')

								$this->editarcolaboradoraction();
						} else {

							$this->editarcolaborador($url[3]);
						}

						break;

					case 'apagar-colaborador':

						if (isset($url[3]))

							$this->apagarcolaborador($url[3]);

						else

							header("Location: /painel/");

						break;

						//configura????es

					case 'configuracoes':

						if (isset($url[3])) {

							if ($url[3] == 'action')

								$this->configuracoesaction();
						} else {

							$this->configuracoes();
						}

						break;
					case 'adicionar-arquivos':
						if (isset($url[3])) {
							if ($url[3] == 'action')
								$this->adicionararquivosaction();
						} else {
							$this->adicionararquivos();
						}
						break;
					case 'apagar-arquivo':
						if (isset($url[3]))
							$this->apagararquivo($url[3]);
						else
							header("Location: /painel/");
					case 'listar-arquivos':
						$this->listararquivos();
						break;

					default:
						break;
				}
			} else {
				$this->home();
			}
		}
	}

	public function home()
	{
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			$configuracoes = $this->PainelModel->configuracoes();
			$actual_link = 'https://cuidadoratianani.com.br';
			require_once("views/header.php");
			// require_once("views/content-padrao.php");
			require_once("views/footer.php");
		} else if ($_SESSION['tipo'] == 'colaborador') {

			// 	$configuracoes = $this->PainelModel->configuracoes();
			// 	require_once("views/header-colaborador.php");
			// // require_once("views/content-padrao.php");
			// 	require_once("views/footer.php");
		} else {
			$configuracoes = $this->PainelModel->configuracoes();
			$arquivos = $this->PainelModel->arquivos($_SESSION['id']);
			require_once("views/header-cliente.php");
			require_once("views/arquivos.php");
			require_once("views/footer.php");
		}
	}



	public function adicionararquivos()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$clientes = $this->PainelModel->listclientes();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/arquivos-add.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/arquivos-add.php");
			require_once("views/footer.php");
		}
	}

	public function adicionararquivosaction()

	{
		$arquivos = $this->PainelModel->adicionararquivosaction();
		header("Location: /painel/listar-arquivos");
	}

	public function adicionarnovidades()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/adicionar-novidade.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/adicionar-novidade.php");
			require_once("views/footer.php");
		}
	}

	public function adicionarnovidadesaction()

	{
		$arquivos = $this->PainelModel->adicionarnovidadeaction();
		header("Location: /painel/listar-novidades");
	}

	public function listararquivos()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$arquivos = $this->PainelModel->listararquivos();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/arquivos-list.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/arquivos-list.php");
			require_once("views/footer.php");
		}
	}

	public function apagararquivo($id)
	{
		$result = $this->PainelModel->apagararquivo($id);
		header("Location: /painel/listar-arquivos");
	}

	public function apagarnovidades($id)
	{
		$result = $this->PainelModel->apagarnovidades($id);
		header("Location: /painel/listar-novidades");
	}

	public function login()
	{
		$sitekey = $this->dados->sitekey();
		$configuracoes = $this->PainelModel->configuracoes();
		require_once("views/login.php");
	}

	public function listargaleria()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$galeria = $this->PainelModel->listgaleria();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/listar-galeria.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/listar-galeria.php");
			require_once("views/footer.php");
		}
	}

	public function listarnovidades()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$galeria = $this->PainelModel->listnovidades();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/novidades.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/novidades.php");
			require_once("views/footer.php");
		}
	}

	public function adicionarprojeto()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/galeria-add.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/galeria-add.php");
			require_once("views/footer.php");
		}
	}

	public function adicionarprojetoaction()

	{
		$projeto = $this->PainelModel->adicionarprojetoaction();
		header("Location: /painel/listar-galeria");
	}

	public function editarprojeto($id)
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$projeto = $this->PainelModel->editprojeto($id);
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/galeria-edit.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/galeria-edit.php");
			require_once("views/footer.php");
		}
	}

	public function editarnovidade($id)
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$colaborador = $this->PainelModel->editnovidade($id);
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/editar-novidade.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/editar-novidade.php");
			require_once("views/footer.php");
		}
	}

	public function editarnovidadeaction()

	{
		$result = $this->PainelModel->editarnovidadeaction();
		header("Location: /painel/listar-novidades");
	}

	public function editarprojetoaction()

	{
		$result = $this->PainelModel->editarprojetoaction();
		header("Location: /painel/listar-galeria");
	}

	public function apagarprojeto($id)
	{
		$result = $this->PainelModel->apagarprojeto($id);
		header("Location: /painel/listar-galeria");
	}

	public function apagarfotoprojeto($id)
	{
		$result = $this->PainelModel->apagarfotoprojeto($id);
		// header("Location: /painel/listar-projetos");
		echo "<script type='text/javascript'>window.close()</script>";
	}

	public function listarcontatos()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$contatos = $this->PainelModel->listcontatos();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/contatos-list.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/contatos-list.php");
			require_once("views/footer.php");
		}
	}

	public function apagarcontato($id)
	{
		$result = $this->PainelModel->apagarcontato($id);
		header("Location: /painel/listar-contatos");
	}

	public function validateLogin()
	{
		require_once("controllers/recaptchalib.php");
		$response = null;
		$reCaptcha = new reCaptcha($this->dados->secretkey());

		if (isset($_POST['g-recaptcha-response'])) {
			$response = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADDR'], $_POST['g-recaptcha-response']);
		}

		if ($response != null && $response->success) {
			if (!isset($_POST["login"]) or !isset($_SESSION["login"])) {
				$this->login();
			} else if (isset($_SESSION["login"])) {
				header("Location: /painel/home");
				$this->home($this->dados);
			}
			$login = $_POST["login"];
			$this->PainelModel->consultUser($login);
			$result = $this->PainelModel->getConsult();
			if ($line = $result->fetch_assoc()) {
				if ($line['senha'] == md5($_POST["senha"])) {
					$_SESSION['id'] = $line['id'];
					$_SESSION['nome'] = $line['nome'];
					$_SESSION['login'] = $line['login'];
					$_SESSION['tipo'] = $line['tipo'];
					header("Location: /painel/home");
				} else {
					echo ("senha incorreta!");
				}
			} else {
				echo ("Usu??rio n??o encontrado!");
			}
		} else {
			echo "<br>Negado, preencha o reCaptcha";
		}
	}

	public function listarusers()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			$users = $this->PainelModel->listusers();
			require_once("views/header.php");
			require_once("views/users-list.php");
			require_once("views/footer.php");
		} else {
			$users = $this->PainelModel->listuserscolaborador();
			require_once("views/header-colaborador.php");
			require_once("views/users-list.php");
			require_once("views/footer.php");
		}
	}

	public function adicionaruser()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/user-add-adm.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/user-add.php");
			require_once("views/footer.php");
		}
	}

	public function adicionaruseraction()
	{
		$user = $this->PainelModel->adicionaruseraction();
		header("Location: /painel/listar-usuarios");
	}

	public function editaruser($id)
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$user = $this->PainelModel->edituser($id);
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/user-edit.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/user-edit.php");
			require_once("views/footer.php");
		}
	}

	public function editaruseraction()
	{
		$result = $this->PainelModel->editaruseraction();
		header("Location: /painel/listar-usuarios");
	}

	public function apagaruser($id)
	{
		$result = $this->PainelModel->apagaruser($id);
		header("Location: /painel/listar-usuarios");
	}

	public function listarcolaboradores()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$colaboradores = $this->PainelModel->listcolaboradores();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/colaboradores-list.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/colaboradores-list.php");
			require_once("views/footer.php");
		}
	}

	public function adicionarcolaborador()
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/colaborador-add.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/colaborador-add.php");
			require_once("views/footer.php");
		}
	}

	public function adicionarcolaboradoraction()
	{
		$colaborador = $this->PainelModel->adicionarcolaboradoraction();
		header("Location: /painel/listar-colaboradores");
	}

	public function editarcolaborador($id)
	{
		$configuracoes = $this->PainelModel->configuracoes();
		$colaborador = $this->PainelModel->editcolaborador($id);
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			require_once("views/header.php");
			require_once("views/colaborador-edit.php");
			require_once("views/footer.php");
		} else {
			require_once("views/header-colaborador.php");
			require_once("views/colaborador-edit.php");
			require_once("views/footer.php");
		}
	}

	public function editarcolaboradoraction()
	{
		$result = $this->PainelModel->editarcolaboradoraction();
		header("Location: /painel/listar-colaboradores");
	}

	public function apagarcolaborador($id)
	{
		$result = $this->PainelModel->apagarcolaborador($id);
		header("Location: /painel/listar-colaboradores");
	}

	public function configuracoes()
	{
		$permissoes = ['admin'];
		if (in_array($_SESSION['tipo'], $permissoes)) {
			$configuracoes = $this->PainelModel->configuracoes();
			require_once("views/header.php");
			$conf = $this->PainelModel->configuracoes();
			require_once("views/configuracoes.php");
			require_once("views/footer.php");
		} else {
			echo "acesso negado";
		}
	}

	public function sessionDestroy()
	{
		session_destroy();
		$this->login();
	}
	public function configuracoesaction()
	{
		$conf = $this->PainelModel->configuracoesaction();
		header("Location: /painel/configuracoes");
	}
}

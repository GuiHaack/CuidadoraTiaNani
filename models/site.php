<?php
class SiteModel
{

	var $result;
	var $conn;
	var $dados;


	function __construct($dados)
	{
		require_once("./bd/connection.php");
		$Oconn = new ConnectClass();
		$Oconn->openConnect($dados);
		$this->conn = $Oconn->getConnect();
		$this->dados = $dados;
	}

	public function listnovidades()
	{
		$sql = "select * from novidades order by id desc;";
		return $this->result = $this->conn->query($sql);
	}

	public function listgaleria()
	{
		$sql = "select * from galeria order by id desc;";
		return $this->result = $this->conn->query($sql);
	}

	public function listservicos($categoria)
	{
		$sql = "select * from servicos where nome= '{$categoria}';";
		return $this->result = $this->conn->query($sql);
	}

	public function listnovidadesnome($nome)
	{
		$sql = "select * from novidades where titulo like '%$nome%';";
		return $this->result = $this->conn->query($sql);
	}

	public function listcategorias()
	{
		$sql = "SELECT DISTINCT categorias FROM projetos;";
		// $categorias = array();
		// while ($line = $this->result->fetch_assoc()) {
		// 	array_push($categorias, $line);
		// }
		// return $categorias;
		return $this->result = $this->conn->query($sql);
	}

	public function projeto($id)
	{
		$sql = "select * from projetos where id = $id;";
		return $this->result = $this->conn->query($sql);
	}

	public function fotos($id)
	{
		$sql = "select * from imagens where id_projeto = $id;";
		return $this->result = $this->conn->query($sql);
	}

	public function listprojetoshome()
	{
		$sql = "select * from projetos order by id asc;";
		return $this->result = $this->conn->query($sql);
	}

	public function countprojetos()
	{
		$sql = "select count(*) as total from projetos;";
		$this->result = $this->conn->query($sql);
		$count = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($count, $line);
		}
		return $count[0];
	}

	public function projetofotos($id)
	{
		$sql = "select * from fotos WHERE fotos.id_projeto = $id order by id;";
		$this->result = $this->conn->query($sql);
		$fotos = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($fotos, $line);
		}
		return $fotos;
	}

	public function projetosfotosfooter($limit)
	{
		$sql = " SELECT * FROM fotos ORDER BY RAND() LIMIT $limit;";
		$this->result = $this->conn->query($sql);
		$fotos = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($fotos, $line);
		}
		return $fotos;
	}

	public function colaboradores()
	{
		$sql = " SELECT * FROM colaboradores;";
		$this->result = $this->conn->query($sql);
		$colaboradores = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($colaboradores, $line);
		}
		return $colaboradores;
	}

	public function countpaginas($limit, $where)
	{
		if (strpos($where, 'where') != true) {
			if (strlen($where) > 10) {
				$where = ' where ' . $where;
			}
		}
		$sql = "select count(*) as total from imoveis $where;";
		$this->result = $this->conn->query($sql);
		$count = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($count, $line);
		}
		return $count[0];
	}

	public function listconfiguracoes()
	{
		$sql = "select * from configuracoes;";
		$this->result = $this->conn->query($sql);
		$conf = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($conf, $line);
		}
		return $conf[0];
	}
	public function adicionarcontato($dados)
	{

		if ($dados["lb"] !== "") {
			return "spam";
		} else {
			$dados['conteudo'] = '';
			if ($dados["assunto"] == 'Trabalhe conosco teste') {
				echo "files: ";
				print_r($_FILES);

				return "spam";
			} else {
				if ($dados["assunto"] == 'Contato') {
					$dados['conteudo'] = $dados['message'];
				}
			}

			$sql = "INSERT INTO contatos SET nome = '{$dados['nome']}',telefone = '{$dados['phone']}', email = '{$dados['email']}', assunto = '{$dados['assunto']}', mensagem = '{$dados['mensagem']}'; ";
			return $this->result = $this->conn->query($sql);
		}
	}

	public function enviaemail($dados)
	{
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/vendor/autoload.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/src/PHPMailer.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/src/Exception.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/src/OAuth.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/src/PHPMailer.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/src/POP3.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/src/SMTP.php');

		/* CHAMA O ENVIO DE EMAIL */
		require_once($_SERVER['DOCUMENT_ROOT'] . '/models/run.php');
	}

	public function result()
	{
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$decode = json_decode($response, true);
			return $decode;
		}
	}
}

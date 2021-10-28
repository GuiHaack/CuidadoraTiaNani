<?php
class dados
{
	var $bd_host = "mysql745.umbler.com";
	var $bd_user = "bd_nani";
	var $bd_name = "bd_nani";
	var $bd_pass = "senha2021";
	var $site_url = "http://cuidadoratianani.com.br/";
	var $secretkey = "6LfJCqUcAAAAANRH78yYGwZZJA5nDzFSronbcs9k";
	var $sitekey = "6LfJCqUcAAAAALLrQRRW09hUMiS7rPflhKA2X-0N";
	var $email_de_envio = "";
	var $email_de_envio_pass = "";
	var $email_de_recebimento = "";
	var $emails_copia = array("", "", "");
	// var $site_url_atual = "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];


	function bd_host()
	{
		return $this->bd_host;
	}
	function bd_user()
	{
		return $this->bd_user;
	}
	function bd_name()
	{
		return $this->bd_name;
	}
	function bd_pass()
	{
		return $this->bd_pass;
	}
	function site_url()
	{
		return $this->site_url;
	}
	function site_url_atual()
	{
		return $this->site_url_atual;
	}
	function secretkey()
	{
		return $this->secretkey;
	}
	function sitekey()
	{
		return $this->sitekey;
	}
	function email_de_envio()
	{
		return $this->email_de_envio;
	}
	function email_de_envio_pass()
	{
		return $this->email_de_envio_pass;
	}
	function email_de_recebimento()
	{
		return $this->email_de_recebimento;
	}
	function emails_copia()
	{
		return $this->emails_copia;
	}
}

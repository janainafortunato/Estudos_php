<?php


class Fornecedor
{
	var $codigo;
	var $razaoSocial;
	var $endereco;
	var $cidade;
	var $contato;

	//metodo construtor
	function __construct()
	{
		//instancia novo contato
		$this->contato = new Contato;
	}

	//grava contato
	function setContato($nome, $telefone, $email)
	{
		//delega chamada de método
		$this->contato->setContato($nome, $telefone, $email);
	}

	//retorno contato
	function getContato()
	{
		//delega chamada de metodo
		return $this->contato->getContato();
	}
}
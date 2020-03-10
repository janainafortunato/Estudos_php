<?php

class Pessoa
{
	var $codigo;
	var $nome;
	var $altura;
	var $idade;
	var $nascimento;
	var $escolaridade;
	var $salario;

	//metodo crescer aumenta a altura em $centimetors.
	function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario)
	{
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->altura = $altura;
		$this->idade = $idade;
		$this->nascimento = $nascimento;
		$this->escolaridade = $escolaridade;
		$this->salario = $salario;
	}

	function Crescer($centimetros)
	{
		if($centimetros > 0)
		{
			$this->altura += $centimetros;
		}
	}

	//metodo formar alera a escolaridade para $titulacao.

	function Formar($titulocao)
	{
		$this->escolaridade = $titulocao;
	}

	//metodo envelhecer aumenta a idade em $anos

	function Envelhecer($anos)
	{
		if($anos > 0)
		{
			$this->idade += $anos;
		}
	}

	function __destruct()
	{
		echo "Objeto {$this->nome} finalizado ...<br>";
	}
}
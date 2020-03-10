<?php

abstract class Conta
{
	var $agencia;
	var $codigo;
	var $dataDeCriacao;
	var $titulo;
	var $senha;
	var $saldo;
	var $cancelada;

	abstract function Transferir($conta, $valor);

	//metodo de retirar diminuir o saldo em $quantia.
	function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo)
	{
		$this->agencia = $agencia;
		$this->codigo = $codigo;
		$this->DataDeCriacao = $dataDeCriacao;
		$this->titular = $titular;
		$this->senha = $senha;

		$this->Depositar($saldo);
		$this->cancela = false;
	}

	function Retirar($quantia)
	{
		if($quantia > 0)
		{
			$this->saldo -= $quantia;
		}
	}

	//metodo depositar aumenta o saldo em $quantia

	function Depositar($quantia)
	{
		if($quantia > 0)
		{
			$this->saldo += $quantia;
		}
	}

	//metodo obtersaldo retorna o salto atual

	function ObterSaldo()
	{
		return $this->saldo;
	}

	function __destruct()
	{
		echo "Objeto conta {$this->codigo} de {$this->titular->nome} finalizada...<br>";
	}

	
}
<?php

class ContaPoupanca extends Conta{

	var $aniversario;


	//metodo construtor (sobrescrito) agora, tambem inicializa a varavel $aniversario.
	function __construct($agencia, $codigo, $dataDeCriacao, $titulo, $senha, $saldo, $aniversario)
	{
		//chamada do metodo construtor da classe-pai.
		parent::__construct($agencia, $codigo, $dataDeCriacao, $titulo, $senha, $saldo);
		$this->aniversario = $aniversario;
	}
	//metodo retirar (sobrescrito) verifica se há saldo para retirar tal $quanntia.

	function Retirar($quantia)
	{
		if($this->saldo >= $quantia)
		{
			//executa método da classe-pai.
			parent::Retirar($quantia);
		}else{

			echo "Retirada não permitida ....<br>";
			return false;
		}
		//retirada permitida
		return true;
	}

	function Transferir($conta, $valor)
	{
		if($this->Retirar($valor))
		{
			$conta->Depositar($valor);
		}
	}
}
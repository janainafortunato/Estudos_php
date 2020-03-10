<?php


include_once '../Conta.php';
include_once '../ContaCorrente.php';

class ContaCorrenteEspecial extends ContaCorrente
{
	function Depositar($valor)
	{
		echo "sobrescrevendo método depositar. <br>";
		parent::Depositar($valor);
	}

	function Transferir($conta, $valor)
	{
		echo "sobrescrevendo método Transferir. <br>";
		parent::Transferir($conta, $valor);
	}
}
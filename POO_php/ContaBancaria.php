<?php

class ContaBancaria
{
	private $banco;
	private $nomeTitular;
	private $numeroAgencia;
	private $numeroConta;
	private $saldo;

	public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
	{
		$this->banco = $banco;
		$this->nomeTitular = $nomeTitular;
		$this->numeroAgencia = $numeroAgencia;
		$this->numeroConta = $numeroConta;
		$this->saldo = $saldo;
	}

	public function obterSaldo()
	{
		return  'Seu saldo atual é: R$ ' . $this->saldo;
	}

	public function depositar($valor)
	{
		$this->saldo += $valor;
		return 'Depósito de R$ ' . $valor . 'realiazado!';
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
		return 'Saque de R$ ' . $valor . 'realiazado!';
	}
}

$conta = new ContaBancaria(

	'banco do Brasil',  //banco
	'Janaina Fortunato', //nometitular
	'876643', //numeroagencia
	'947388636565-10', //numeroconta
	0.00 //saldo
);

 echo $conta->obterSaldo(); //0
 echo PHP_EOL;

 echo $conta->depositar(300.00);

 echo PHP_EOL;

 echo $conta->obterSaldo(); //300,00

  echo PHP_EOL;

 echo $conta->sacar(150.00);

 echo PHP_EOL;

  echo $conta->obterSaldo();

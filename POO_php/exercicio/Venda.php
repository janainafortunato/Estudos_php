<?php


class Venda
{
	private $data;
	private $produto;
	private $quantidade;
	private $valorTotal;

	public function __construct($data, $produto, $quantidade, $valorTotal)
	{
		 $this->data;
		 $this->produto;
		 $this->quantidade;
		 $this->valorTotal;
	}

	public function exibirVenda()
	{
		
		echo 'Data:' . $this->data = "10/12/2019"; //data;
		echo PHP_EOL;
		echo 'Produto: ' . $this->produto = "Casa amarela com portão azul";//produto;
		echo PHP_EOL;
		echo 'Quantidade: ' . $this->quantidade = "2"; //quantidade;
		echo PHP_EOL;
		echo 'Valor Total: ' . $this->valorTotal = 100000000.000; //valorTotal


	}
}


$venda = new Venda(

 '10/12/2019', //data;
 'Casa amarela com portão azul',//produto;
 '2', //quantidade;
 100000000.000 //valorTotal

);

echo $venda->exibirVenda();





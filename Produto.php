<?php


class Produto
{
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;

	function ImprimeEtiqueta()
	{
		print 'Codigo:' . $this->codigo . "<br>";
		print 'Descrção:'. $this->descricao . "<br>";
	}
}
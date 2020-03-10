<?php

class Aplicacao
{
	static $Quantidade;

	//metodo construtor incrementa a $quantidade de aplicação.

	function __construct($Nome)
	{
		//incrementa propriedade estática
		self::$Quantidade ++;
		$i = self::$Quantidade;
		echo "Nova apalicação nr . $i: $Nome <br>";
	}
}

//cria novos objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumerc');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Quantidade de Aplicação = ' . Aplicacao::$Quantidade . "<br>";

<?php

class Aplicacao extends Biblioteca
{
	//declaracao das constantes 
	const $ambiente = "Gnome Desktop";
	const $versao = "3.8";

	//método construtor acessa as constantes internamente.

	function __construct($nome)
	{
		echo parent::$nome .self::$ambiente . self::$versao . $nome . "<br>";
	}
}
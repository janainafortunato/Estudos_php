<?php

class Biblioteca
{
	const Nome = "GTK";
}

class Aplicacao extends Biblioteca
{
	//declaracao das constantes 
	const Ambiente = "Gnome Desktop";
	const Versao = "3.8";

	//método construtor acessa as constantes internamente.

	function __construct($Nome)
	{
		echo parent::Nome .self::Ambiente . self::Versao . $Nome . "<br>";
	}
}

echo Biblioteca::Nome . Aplicacao::Ambiente .  Aplicacao::Versao . "<br>";

new Aplicacao('Dia');
new Biblioteca('Gimp');
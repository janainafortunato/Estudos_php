<?php


class Computador
{
	var $cpu;
	function ligar()
	{
		echo "Ligando computador a {$this->cpu}.....";
	}
}

$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();
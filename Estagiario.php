<?php


class Estagiario extends Funcionario
{
	//meétodo getSalario sobreescrito retorna o $salario com 12% de bônus.
	function getSalario()
	{
		return $this->salario * 1.12;
	}
}
<?php

class Funcionario
{
	private $codigo;
	public $nome;
	private $nascimento;
	protected $salario;

	//metodo setSalario atribui o parâmentro $salario á propriedade $salario.

	function setSalario($salario)
	{
		//verifica se é numerico e positivo
		if(is_numeric($salario) and ($salario > 0))
		{
			$this->salario = $salario;
		}
	}

	//me´todo getSalario retorna o valor da propriedade $salario.

	function getSalario()
	{
		return $this->salario;
	}
}
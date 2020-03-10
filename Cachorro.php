<?php


class Cachorro
{
	private $nascimento;

	//metodo construtor

	function __construct($nome)
	{
		$this->nome = $nome;
	}

	//intercepta atribuição
	function __set($propriedade, $valor)
	{
		if($propriedade == 'Nascimento')
		{
			//verifica se valor é dividido em 3 partes separadas por '/'
			if(count(explode('/', $valor))==3)
			{
				echo "Dado '$valor', atribuido á '$propriedade' \n";
				$this->$propriedade = $valor;
			}
			else{

				echo "Dado '$valor', não atribuido á '$propriedade' \n";
			}
	}
	else{

		$this->$propriedade = $valor;
	}

}

}
<?php

function validaNome(string $name) : bool
{
	if(empty($name))
{
	setarMensagemErro( 'O nome não pode der vazio por favor preencha novamente');
	return false;
}

else if(strlen($name) < 3)
{
	setarMensagemErro( 'O nome não pode conter menos de 3 caracteres');
	return false;
}

else if(strlen($name) > 40)
{
	setarMensagemErro( 'O nome não pode conter mais de 40 caracteres');
	return false;
	
	}

	return true;

}

function validaIdade(string $idade) : boll
{

 if(!is_numeric($idade))
{
	setarMensagemErro( 'Informe um numero para a idade');
	return false;
	
	}

	return true;
}




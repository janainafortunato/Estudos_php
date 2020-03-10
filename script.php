<?php

/*Crie um projeto em PHP para uma competição de natação,o sistema deverá permitr a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos categoria infatil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado. */

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolencente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';



$nome = $_POST['name'];
$idade  = $_POST['idade'];

if(empty($nome))
{
	echo "O nome não pode ser vazio";
	return;
}

if(strlen($nome) < 3)
{
	echo "O nome deve conter mais de 3 caracteres";
	return;
}

if(strlen($nome) > 40)
{
	echo "O nome é muito extenso";
	return;
}

if(!is_numeric($idade))
{
	echo "Informe um número para idade";
	return;
}

if($idade >= 6 && $idade <= 12)
{
   
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
		{
			echo "Nadodor " . $nome . "compete na categoria ". $categorias[$i];
		}
	}

}else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adolencente')
		{
			echo "Nadodor " . $nome . "compete na categoria" . $categorias[$i];
		}
	}
}
else
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
		{
			echo "Nadodor " . $nome . "compete na categoria " . $categorias[$i];
		}
	}

} 

?>
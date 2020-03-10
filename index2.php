<?php

/*Crie um projeto em PHP para uma competição de natação,o sistema deverá permitr a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos categoria infatil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado. */

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolencente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'JANAINA';
$idade  = 32;

if($idade >= 6 && $idade <= 12)
{
   
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
		{
			echo "Nadodor " . $nome . "compete na categoria infantil";
		}
	}

}else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adolencente')
		{
			echo "Nadodor " . $nome . "compete na categoria adolencente";
		}
	}
}
else
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
		{
			echo "Nadodor " . $nome . "compete na categoria adulto";
		}
	}

}
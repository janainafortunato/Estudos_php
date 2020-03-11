<?php

/*Crie um projeto em PHP para uma competição de natação,o sistema deverá permitr a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos categoria infatil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado. */

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolencente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['name'];
$idade  = $_POST['idade'];

if(empty($nome))
{
	$_SESSION['mensagem-de-erro'] = 'O nome não pode der vazio por favor preencha novamente';
	header('location: index2.php');
	return;
}

else if(strlen($nome) < 3)
{
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
	header('location: index2.php');
	return;
}

else if(strlen($nome) > 40)
{
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
	header('location: index2.php');
	return;
}

else if(!is_numeric($idade))
{
	$_SESSION['mensagem-de-erro'] = 'Informe um numero para a idade';
	header('location: index2.php');
	return;
}

else if($idade >= 6 && $idade <= 12)
{
   
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
		{
			$_SESSION['mensagem-de-erro'] = "Nadodor " . $nome . "compete na categoria ". $categorias[$i];
			header('location: index2.php');
			return;
			
		}
	}

}else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adolencente')
		{
			$_SESSION['mensagem-de-erro'] = "Nadodor " . $nome . "compete na categoria" . $categorias[$i];
			header('location: index2.php');
			return;
		}
	}
}
else
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
		{
			$_SESSION['mensagem-de-erro'] = "Nadodor " . $nome . "compete na categoria " . $categorias[$i];
			header('location: index2.php');
			return;
		}
	}

} 

?>
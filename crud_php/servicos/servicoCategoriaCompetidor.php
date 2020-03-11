<?php




function defineCategoriaCompetidor(string $name, string $idade) : ?string
{


$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolencente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

 if(validaNome($name) && validaIdade($idade))
 {
 	if($idade >= 6 && $idade <= 12)
{
   
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
		{
			setarMensagemErro( "Nadodor " . $name . "compete na categoria ". $categorias[$i]);
			return null;
			
		}
	}

}else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adolencente')
		{
			setarMensagemErro( "Nadodor " . $name . "compete na categoria" . $categorias[$i]);
			return null;
		}
	}
}
else
{
	for($i = 0; $i<= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
		{
			setarMensagemErro(  "Nadodor " . $name . "compete na categoria " . $categorias[$i]);
			return null;
		}
	}

  } 
}

else
{
	removerMensagemSucesso();
	return obterMensagemErro();

}
 

}

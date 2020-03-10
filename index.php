<?php


$salario = 1020;
$tempo_servico = 12;
$tem_reclacao = false;

if($salario > 1000)
{
	if($tempo_servico >= 12)
	{
		if($tem_reclacao != true)
		{
			echo "Parabéns foi promovido";
		}
	}
}


if (($salario > 1000) and ($tempo_servico >= 12) and ($tem_reclacao != true))
{
	echo 'parabéns, você foi promovido';
}


function calcula_obesidade($peso, $altura)
{
	return $peso/($altura * $altura);
}
echo calcula_obesidade(70, 1.85);


function amor($valor, $sentimento, $quantidade)
{
	return $valor . '<br>' . $sentimento . '<br>' . $quantidade;
}

echo amor("Amor", "amor", "100");




$total = 0; //variavel global

function km2mi($quilometros)
{
	global $total; //variavel global 
	$total +=$quilometros;
	return $quilometros * 0.6;
}

echo 'pecorreu' . km2mi(100) . "milhas \n";
echo 'pecorreu' . km2mi(200). "milhas \n ";
echo 'pecorreu  no total ' . $total . "quilometros \n";



function percorre($quilometros)
{
	static $total;
	$total += $quilometros;
	echo "percorreu mas $quilometros do total de $total \n ";
}

percorre(100);
percorre(200);
percorre(50);
















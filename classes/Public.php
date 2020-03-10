<?php

include_once '../Funcionario.php';
include_once '../Estagiario.php';

//criar objeto estagario
$pedrinho = new Funcionario;
$pedrinho->nome = 'Pedrinho <br>';

//criar objeto estagiario

$mariana = new Estagiario;
$mariana->nome = 'Mariana  <br>';


//imprime propriedade nome
echo $pedrinho->nome;
echo $mariana->nome;
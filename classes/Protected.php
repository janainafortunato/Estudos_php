<?php

include_once '../Funcionario.php';
include_once '../Estagiario.php';

$pedrinho = new Estagiario;
$pedrinho->setSalario(248);
echo 'O salario do pedrinho é R$: ' . $pedrinho->getSalario() . "<br>";
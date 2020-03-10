<?php

include_once '../Funcionario.php';

//instancia novo funcionario

$pedro = new Funcionario;

//atribuir novo salario
$pedro->setSalario(876);

//obtem o salario
echo 'Salario: (R$)' . $pedro->getSalario();




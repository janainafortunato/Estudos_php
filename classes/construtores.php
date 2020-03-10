<?php

include_once '../Pessoa.php';
include_once '../Conta.php';

$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, "10/04/1976", "Ensino Medio", 650.00);

echo "Manipulando o objeto {$carlos->nome}: <br>";

echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>";
$carlos->Formar('Tecnico em Eletricidade');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>";

echo "{$carlos->nome} possui {$carlos->idade} anos <br>";
$carlos->Envelhecer(1);
echo "{$carlos->nome} possui {$carlos->idade} anos <br>";

$conta_carlos = new Conta(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 567.89);

echo "<br>";
echo "Manipulando a conta de: {$conta_carlos->titular->nome}: <br>";

echo "O saldo atual é R|$ {$conta_carlos->ObterSaldo()} <br>";
$conta_carlos->Depositar(20);
echo "O saldo atual é R|$ {$conta_carlos->ObterSaldo()} <br>";
$conta_carlos->Retirar(10);
echo "O saldo atual é R|$ {$conta_carlos->ObterSaldo()} <br>";



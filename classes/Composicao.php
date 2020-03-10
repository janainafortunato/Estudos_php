<?php

include_once '../Fornecedor.php';
include_once '../Contato.php';

//instancia novo fornecedor
$fornecedor = new Fornecedor;
$fornecedor->razaoSocial ='Produto Bom Gosto S.A.';

//atribuir informações de contato
$fornecedor->setContato('Mauro', '51 1234-5678', 'mauro@bomgosto.com.br');

//inprime informações
echo $fornecedor->razaoSocial . "<br>";
echo "Informações de contato <br>";
echo $fornecedor->getContato();
<?php

include_once '../Fornecedor.php';
include_once '../Produto.php';

//instancia Fornecedor;

$fornecedor = new Fornecedor;
$fornecedor->codigo = 848;
$fornecedor->razaoSocial = 'Bom Gosto Alimentos S.A.';
$fornecedor->endereco = 'Rua Ipiranga';
$fornecedor->cidade = 'Poços de Caldas';

//instancia produto
$produto = new Produto;
$produto->codigo = 462;
$produto->descricao = 'Doce de Pêssego';
$produto->preco = 1.24;
$produto->fornecedor = $fornecedor;

//imprime atributos
echo 'Codigo : ' . $produto->codigo . "<br>";
echo 'Descrição : '. $produto->descricao . "<br>";
echo 'Codigo :' . $produto->fornecedor->codigo . "<br>";
echo 'Razão Social :' . $produto->fornecedor->razaoSocial ."<br>";
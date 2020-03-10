<?php

include_once '../Cesta.php';
include_once '../Fornecedor.php';
include_once '../Produto.php';

$fornecedor = new Fornecedor;
$fornecedor->razaoSocail = 'Produtos Bom Gosto S.A.';

$cesta = new Cesta;
$cesta->AdicionaItem($fornecedor);

$cesta->CalculaTotal();
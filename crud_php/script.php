<?php

/*Crie um projeto em PHP para uma competição de natação,o sistema deverá permitr a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos categoria infatil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado. */

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";



$name = $_POST['name'];
$idade  = $_POST['idade'];

defineCategoriaCompetidor( $name, $idade);

header('location: index.php');




?>
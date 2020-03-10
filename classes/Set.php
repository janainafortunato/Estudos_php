<?php

include_once '../Cachorro.php';


$toto = new Cachorro('Toto');
echo $toto->nascimento = '3 de março' ; //atribuição inválida
echo "<br>";
echo $toto->nascimento = '10/04/2005'; //atribuição correta

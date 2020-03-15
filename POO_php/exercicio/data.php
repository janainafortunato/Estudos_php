<?php


$data = new DateTime();

//echo $data->format('d-m-y H:i:s') . PHP_EOL;
$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); //ADICIONA UM PARIODO DE 5 MINUTOS
$data->sub($$intervalo);

var_dump($data);
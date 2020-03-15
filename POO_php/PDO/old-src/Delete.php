<?php


declare(strict_types=1);

$pdo = require 'Connect.php';

$sql = 'DELETE FROM produtos WHERE id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_get['id']);
$prepare->execute();

echo $prepare->rowCount();
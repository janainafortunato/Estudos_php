<?php   

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Incrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device-width, initial-scale-1">
</head>
<body>
	<p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

	<form action="script.php" method="POST">
		<?php

			$mensagemSucesso = isset($_SESSION['mensagem-de-Sucesso']) ? $_SESSION['mensagem-de-Sucesso'] : '';
			if(!empty($mensagemSucesso))
			{
				echo $mensagemSucesso;
			}

			$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
			if(!empty($mensagemDeErro))
			{
				echo $mensagemDeErro;
			}
		?>
		<p>Seu Nome:<input type="text" name="name"></p>
		<p>Sua Idade:<input type="text" name="idade"></p>
		<p><input type="submit" value="Enviar dados do competidor"></p>
	</form>

</body>
</html>
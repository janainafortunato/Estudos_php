<?php

require 'Produto.php';

$produto = new Produto();


switch ($_GET['operacao']) {

	case 'list':
		
		echo '<h3>Produtos: </h3>';

		foreach ($produto->list() as  $value) {
			echo 'Id:' . $value['id'] . '<br>Descrição:'. $value['descricao'] . '<hr>';

		}
		
		break;

		case 'insert':
		
		$status = $produto->insert('Produto Teste do Janaina Fortunato 01');

		if(!$status)
		{
			echo "Não foi possével executar a operação !";
			return false;
		}

		echo "Registro inserido com sucesso!";

		break;

		case 'update':

		$status = $produto->update('Produto alterado do Janaina Fortunato', 4);

		if(!$status)
		{
			echo "Não foi possével executar a operação !";
			return false;
		}

		echo "Registro atualizado com sucesso!";

		break;

		case 'delete':
		
		$status = $produto->delete(3);

		if(!$status)
		{
			echo "Não foi possével executar a operação !";
			return false;
		}

		echo "Registro excluido com sucesso!";

		break;
	
	default:
		# code...
		break;
}
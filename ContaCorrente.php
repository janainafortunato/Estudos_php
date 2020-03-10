<?php 


class ContaCorrente extends Conta
{
	var $limite;
	var $taxaTransferencia = 2.5;
	//metodo construtor (sobrescrito) agora tambem inicializa a variavel $limite.

	function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite)
	{
		//chamada de metodo construtor da classe-pai.
		parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
		$this->limite = $limite;
	
			}
	//metodo retirar (sobrescrito) verifica se a quantia retirada está dentro do limite.

	function Retirar($quantia)
	{
		//imposto sobre movimentação financeira
		$cpmf = 0.05;

		if(($this->saldo + $this->limite) >= $quantia)
		{
			//execute metodo da classe-pai
			parent::Retirar($quantia);

			//debita o imposto
			parent::Retirar($quantia * $cpmf);
		}else{

			echo "Retirada não permitida ...<br>";
			return false;
		}
		///retirada permitida
		return true;
	}
 	
 	final function Transferir($conta, $valor)
 	{
 		if($this->Retirar($valor))
 		{
 			$conta->Depositar($valor);
 		}

 		if($this->titular != $conta->titular)
 		{
 			$this->Retirar($this->taxaTransferencia);
 		}
 	}

}


?>
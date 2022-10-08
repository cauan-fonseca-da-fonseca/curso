<?php 
	
	$nome = "hcode";
	$site = 'www.hcode.com.br';

	$ano = 1990;
	$salario = 5500.99;

	$bloqueado = false;
	//tipos basicos
	//////////////////////////////////////////

	$frutas = array("abacaxi", "laranja","manga");
	// array é um tipo composto
	echo $frutas[2];

	$nascimento = new DateTime();//obejeto que pega a data atual;

	echo "<br/>";

	//var_dump($nascimento);//imprime uum objeto;

	//////////////////////////////////////////////

	//tipos especiais
	$arquivo = fopen("exemplo-03.php", "r");
	var_dump($arquivo);

 ?>
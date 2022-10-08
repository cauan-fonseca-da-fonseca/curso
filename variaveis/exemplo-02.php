<?php 

	$anoNascimento = 1990;

	$nome1 = "joaõ";

	$sobrenome = "fonseca";

	$nomeCompleto = $nome1 . " " . $sobrenome; // concatena os dois;

	echo $nomeCompleto;
	exit; // para a execução
	unset($nome1, $nomeCompleto);//limpa a variavel exclui o conteudo dela;

	echo "<br/>";

	if (isset($nome1)) {
		echo $nome1;
	}// vai imprimir se a variavel existir isset verifica se a variavel existe

	echo $nomeCompleto;

	//$this nome reservado;
	//a variaveis pré definidas arrays super global 

 ?>
<?php

    $nome = "cauan";
    $sobrenome = "fonseca";
    $nomeCompleto = $nome . " " . $sobrenome;
    echo $nomeCompleto;
    echo "<hr>";

    $idade = 18;
    echo $idade;
    echo "<br>";

    unset($idade);
    if (isset($idade)) {
        echo $idade;
        echo "<br>";
    } else {
        echo "a variavel não existe";
        echo "<hr>";
    }

    $frase = "Essa frase é aleatoria e é apenas para teste";
    echo strtolower($frase);
    echo "<br>";

    echo strtoupper($frase);
    echo "<br>";

    echo ucwords($frase);
    echo "<br>";

    echo ucfirst($frase);
    echo "<br>";

    $palavra = "7e57e";

    $new_frase = substr($frase, 0, strpos($frase, "teste")) . $palavra;
    echo $new_frase;



?>
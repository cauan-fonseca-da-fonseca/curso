<?php

    $nome = $_GET["nome"];
    $sobrenome = "fonseca";

    $nomeCompleto = $nome . " ". $sobrenome;

    echo $nomeCompleto;

    $ip = $_SERVER["REMOTE_ADDR"];
    echo "</br>";
    var_dump($ip);

    $url = $_SERVER["SCRIPT_NAME"];
    echo "</br>";
    var_dump($url);

    function teste1() {
        global $nome;
        $nome = "joao";
        echo $nome;
    }

    echo "</br>";
    teste1();
    echo "</br>";
    echo $nome;

    function teste2() {
        global $idade;
        $idade = 18;
    }

    teste2();
    echo "</br>";
    echo $idade;

    echo "</br>";
    $op = 4 <=> 4;
    var_dump($op);
?>
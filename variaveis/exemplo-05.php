<?php

    $nome = "cauan1";

    function teste() {
        global $nome;
        echo $nome;
    }

    function teste2() {
        $nome = "joao";
        echo "teste 2" . $nome;
    }

    function teste3() {
        global $idade;
        $idade = 18;
    }

    teste();
    teste2();
    teste3();
    echo $idade;

?>
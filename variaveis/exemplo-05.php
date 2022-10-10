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

    teste();
    teste2();

?>
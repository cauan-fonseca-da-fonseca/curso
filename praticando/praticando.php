<?php

    $name = "cauan";
    $idade = 18;
    $salario = 5500.99;

    $frutas = array("teste","teste1");

    echo "ola";
    echo "</br>";
    echo $idade;
    echo "</br>";
    echo $name;

    unset($idade);

    if (isset($idade)) {
        echo $idade;
    }

    echo $idade;



?>

<?php

    $frase = "A pratica leva a perfeição";
    echo strtoupper($frase);
    echo "<br>";

    echo strtolower($frase);
    echo "<br>";

    echo ucfirst($frase);
    echo "<br>";

    echo ucwords($frase);
    echo "<br>";

    echo str_replace("t", 7, $frase);
    echo "<br>";

    $q = strpos($frase, "leva");
    var_dump($q);
    echo "<br>";

    $frase2 = substr($frase, 0, $q);
    echo $frase2;
    echo "<br>";

    $frase3 = substr($frase, $q, strlen($frase));
    echo $frase3;
    

?>
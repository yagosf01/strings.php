<?php

    $str = "Estamos encontrando strings";

    $testando = strpos($str, "strings");

    echo $testando . "<br>";

    $testando2 = strpos($str, "java");

    echo $testando2 . "<br>";

    if($testando2 === false) {
        echo "Palavra não encontrada <br>";
    }

    // strrpos = encontrar a ultima ocorrencia

    $teste3 = strrpos($str, "encontrando");

    echo $teste3 . "<br>";

    $resto = strstr($str, "encontrando");
    echo $resto . "<br>";

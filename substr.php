<?php

    $str = "Testando cortes na strings";

    $strcortada = substr($str, 9, 6);

    echo $str . "<br>";

    echo $strcortada . "<br>";

    $str2 = "testando esta string";

    $novastr = substr($str2, 8); // CORTE ATE O INDICE

    echo $novastr . "<br>";

    $novastr2 = substr($str2, 8, -3); // REMOVE ULTIMO INDICE

    echo $novastr2 . "<br>";



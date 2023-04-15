<?php

    $textoHtml = "<p> Testando paragrafo</p><div> uma div</div><p> outro paragrafo</p>";

    echo $textoHtml;

    $salvarTextoPuro = strip_tags($textoHtml);

    echo($salvarTextoPuro);
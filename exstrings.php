<?php
    $str = " o rato roeu a roupa do rei de Roma";

    $a = 0;

    for($i = 0; $i < strlen($str); $i++) { 
        if($str[$i] === "a"){
            $a++;
        }
    }

    

    echo "a quantidade de a's é: $a <br>";
    echo "----------------------------- <br>";

    $str1 = "esse item está em";
    $str2 = "promocao";

    $str3 = strtoupper($str2);
    $str4 = ucwords($str1);

    echo $str4 . " " . $str3; 

    echo "<br>";
    echo "----------------------------- <br>";

    $frase = "esse item está em";
    $promo = "promocao";

    echo ucwords($frase) . " " . strtoupper($promo);

    echo "<br>";
    echo "----------------------------- <br>";

    $str5 = "Cade meu queijo? ";

    $novastr = substr($str5, 8, -1);

    echo $novastr;

    echo "<br>";
    echo "----------------------------- <br>";

    $frase1 = "carro - navio - helicoptero - barco - jangada";

    $arr1 = explode(" - ",$frase1);

    for($i = 0; $i < count($arr1); $i++){
        echo "Item: $arr1[$i] <br>";
    }

    echo "<br>";
    echo "----------------------------- <br>";

    $arr2 = ["O","PHP","é","muito","legal"];
    
    $str6 = implode(" ",$arr2);

    echo "$str6 <br>";
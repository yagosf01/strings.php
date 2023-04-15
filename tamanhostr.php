<?php

    $str1 = "abcdefghijklmnopqrstuvwxwz";
    $str2 = "abcdefg";

    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if($len1 > $len2) {
        echo "A string 1 é maior que a str2";
    } else {
        echo "A string 2 é maior que a str1";
    }
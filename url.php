<?php
    $url = "https://www.youtube.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "<br>";

    echo $arrayUrl["host"];
    echo "<br>";
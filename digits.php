<?php
    header("Content-Type: text/plain");
    $digits = array();
    print_r($digits);
    $digits = array(1, 2, 3);
    print_r($digits);
    $digits[] = 4;
    array_push($digits, 5);
    print_r($digits);
    $digits[0] = "one";
    print_r($digits);
    $digits[4] = "five";
    print_r($digits);
    $digits["seven"] = 7;
    print_r($digits);
    echo $digits[4] . " " . $digits["seven"];
    print_r($_SERVER);
    print_r($_GET);
?>
<?php

    $a = 10;
    // $a += 5;// $a = $a + 5; // 15
    // $a -= 5;// $a = $a - 5; // 10
    // $a /= 5;// $a = $a / 5; // 2
    // $a *= 5;// $a = $a * 5; // 50
     $a %= 5;// $a = $a % 5; // 0
    echo $a;

    $ad = "Alihan";
    $soyad = "Bayrak";

    //echo "Alihan" . "Bayrak" . 19 . $ad . "Alihan" . $soyad;
    $ad .= " " . $soyad; 
    echo $ad;


?>
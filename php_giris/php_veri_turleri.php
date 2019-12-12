<?php

    /*
        Veri Türleri (Data Types)
            String "Alihan Bayrak" 'Alihan Bayrak'
            Integer 500, 200
            Float (Double) 10.5, 9.9
            Boolean (true, false)
            array (dizi)
            Object (nesne)
            NULL 
        gettype() // veri Türünü veren fonksiyon
    */
    $string = "Alihan Bayrak";
    $int = 15;
    $float = 8.5;
    $boolean = true;
    $array = array();
    $object = new stdClass;
    $null = NULL;
    echo gettype($string); echo "</br>";
    echo gettype($int); echo "</br>";
    echo gettype($float); echo "</br>";
    echo gettype($boolean); echo "</br>";
    echo gettype($array); echo "</br>";
    echo gettype($object); echo "</br>";
    echo gettype($null); echo "</br>";
?>
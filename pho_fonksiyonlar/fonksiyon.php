<?php
    function Test(){
        return "Merhaba Dünya";
    }
    $a = Test();
    echo $a;
    //Merhaba Dünya

    function topla($sayi1, $sayi2){
        return ($sayi1 + $sayi2);
    }
    $toplam = topla(6,15);
    echo $toplam;
    // 21
    function topl($sayi3, $sayi4 = 10){
        return ($sayi3 + $sayi4);
    }
    $topla = topl(6);
    echo $topla;
    // 16 Çünkü vasayılan değer 10 atadık sayi4'e

    $ad = "Alihan";

    /*
        global
        $GLOBALS
    */
    function adSoyad($soyad){
        //global $ad;
        return $GLOBALS['ad'] . " " . $soyad;
    }
    echo adSoyad('Bayrak');
    //Alihan Bayrak
    
    $yazi = "Alihan Bayrak Alihan Bayrak";

    function kisalt($str, $limit = 9)
    {
        $karakterSayisi = strlen($str);
        if ($karakterSayisi > $limit){
            $str = substr($str, 0, $limit) . "..";
        }
        return $str;
    }
    echo kisalt($yazi, 5);
    //Aliha..
?>
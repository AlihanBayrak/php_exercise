<?php
    /*
        for(DEĞER; KOŞUL; DEĞERİ ARTIR/AZALT){

        }
    */
    for ($i = 1; $i <= 10; $i++){
        echo $i;
    }
    // 12345678910
    for ($i = 10; $i >= 0; $i--){
        echo $i;
    }
    //109876543210
    $arr = [
        'Alihan Bayrak',
        'Halil İbrahim Çakır',
        'Furkan Mısır'
    ];
    for ($i = 0; $i <= (count($arr) - 1); $i++){
        echo $arr[$i] . '<br>';
    }
    //Alihan Bayrak 
    // Halil İbrahim Çakır 
    // Furkan Mısır
    for ($i = (count($arr) - 1); $i >= 0; $i--){
        echo $arr[$i] . '<br>';
    }
    // Furkan Mısır
    // Halil İbrahim Çakır
    // Alihan Bayrak
?>
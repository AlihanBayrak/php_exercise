<?php
    //normal fonksiyon
    function test(){
        return 'imtihan';
    }
    //echo test(); echo '<br>';
    //imtihan

    //anomim fonlsiyon
    $test = function($parametre){
        return 'imtihan' . " " . $parametre;
    };
    //echo $test('ALİHAN');
    //imtihan ALİHAN

    $arr = [
        function(){
            return '1. fonksiyon';
        },
        function(){
            return '2. fonksiyon';
        },
        function(){
            return '3. fonksiyon';
        }
    ];
    //echo $arr[rand(0, 2)](); //rastglele fonksiyon cagir rand() ile

    function filtrele($isim){
        return $isim . " " . 'Bayrak';
    }
    
    $arr = ['Alihan', 'Aydin', 'Arzu', 'Yasin'];
    $arr = array_map('filtrele', $arr);
    print_r($arr);
    
     

?>
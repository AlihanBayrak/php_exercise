<?php
    // range(0, 100)

    // function say($baslangic, $limit){
    //     $arr = [];
    //     for ($i = $baslangic; $i <= $limit; $i++){
    //         $arr[] = $i;
    //     }
    //     return $arr;
    // }
    // $sayilar = say(0, 100);
    // //print_r($sayilar);
    // // 1 den 100 e kadar 

    // function say($baslangic, $limit)
    // {
    //     for ($i = $baslangic; $i <= $limit; $i++){
    //         yield $i;
    //     }
    // }
    // $sayilar = say(0, 100);
    // foreach ($sayilar as $sayi){
    //     echo $sayi . '<br>';
    // }
    // // alt alta 1 den 100 e kadar

    // memory_get_usage() byte cinsinde degeri dondurur
    // number_format()
    
    function byteToMb($byte)
    {
        return number_format($byte / 1048576, 2);
    }
    
    $sayilar = range(0, 1000000);
    
    echo byteToMb(memory_get_usage()) . ' MB bellek kullanimi';
    //34.37 MB bellek kullanimi

    function say($baslangic, $limit)
     {
         for ($i = $baslangic; $i <= $limit; $i++){
             yield $i;
         }
     }
     $sayilar = say(0, 100);
     echo byteToMb(memory_get_usage()) . ' MB bellek kullanimi';
     //0.37 MB bellek kullanimi

?>
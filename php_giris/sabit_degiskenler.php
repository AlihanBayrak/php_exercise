<?php

    /*
        Sabit değişkenler;
            define() fonksiyonu ile tanımlanır.
            Türkçe karakte içerebilir (Önerilmez)
            Sayı ile başlayamaz
            Harfya da _ işareti ile başlar
            Büyük-küçü harfe duyarlıdır
        Veri türlerinde;
            object hariç tüm veri tiplerini içerir.
    */

    $alihan = "Alihan Bayrak";
    //echo $alihan;

    define("alihan","Alihan Bayrak");
    echo alihan;

?>
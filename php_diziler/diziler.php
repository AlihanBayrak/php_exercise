<?php
    $ad = "Alihan";
    $soyad = "Bayrak";
    $meslek = "Geliştirici";
    $okul = "Erzurum Meslek Yüksek Okulu";

    /*
        Dizi Tanımlama
            1-array()
            2-[]
    */

    $kimlik = array(
        'ad' =>"Alihan",
        'soyad' =>"Bayrak",
        'meslek' =>"Geliştirci",
        'okul' =>"Erzurum Meslek Yüksek Okulu"
    );
    //2. yöntem
    $kimlik_kopya = [
        'ad' =>"Alihan",
        'soyad' =>"Bayrak",
        'meslek' =>"Geliştirci",
        'okul' =>"Erzurum Meslek Yüksek Okulu"
    ];
    /*
        Dizi içindeki elemanlara erişmek
        - print_r();
    */
    print_r($kimlik);
    
?>
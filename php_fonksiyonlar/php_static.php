<?php

    function say(){
        static $sayi = 1;
        echo $sayi . '<br>';
        $sayi++;
    }
    // say();
    // say();
    // say();
    // say();

    function yukle($deger){
        static $yuklenenler = [];
        $yuklenenler[] = $deger;
        return $yuklenenler;
    }

    yukle('test.php');
    yukle('z.php');
    $yuklenenler = yukle('b.php');

    print_r($yuklenenler);
?>
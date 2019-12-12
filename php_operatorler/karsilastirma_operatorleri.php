<?php
    /*
       Karşılaştırma operatörleri
            == eşittir
            != eşit değildir
            > büyüktür
            < küçüktür
            >= büyükse ya da eşitse
            <= küçükse ya da eşitse
            === denkse (hem karakter hem tür bakımından eşit)
            !== denk değilse
    */
    $a = 10;
    $s = 5;

    echo var_dump($a == $s); echo "</br>";
    echo var_dump($a != $s); echo "</br>";
    echo var_dump($a > $s); echo "</br>";
    echo var_dump($a < $s); echo "</br>";
    echo var_dump($a >= $s); echo "</br>";
    echo var_dump($a <= $s); echo "</br>";
    echo var_dump($a === $s); echo "</br>";
    echo var_dump($a !== $s); echo "</br>";
    //çıktılar
    // bool(false)
    // bool(true)
    // bool(true)
    // bool(false)
    // bool(true)
    // bool(false)
    // bool(false)
    // bool(true) 

    
?>
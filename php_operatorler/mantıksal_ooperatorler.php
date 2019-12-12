<?php
    /*
        Mantıksal Operatörler
            && - AND - VE - İki koşula dogruysa geç
            || - OR - Veya - iki koşuldan birisi doğruysa geç
            ! - değilse
    */
    $a = 10;
    $s = 10;
    
    echo var_dump(($a == $a) && ($a + $s == 20)); //bool(true)
    echo var_dump(($a != $a) || ($a + $s == 20)); //bool(true)
    echo var_dump(!($a == $a) && ($a + $s == 20)); //bool(false)
?>
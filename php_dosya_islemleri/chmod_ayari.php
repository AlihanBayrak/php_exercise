<?php

    /*
        chmod()
        1/ numara 0 ile baslar
        2/ numara dosya sahibinin izinleri
        3/ numara kullanici gruplarinin izinleri
        4/ numara ger' kalan hekes'

        1 = execute (islem) izni
        2 = yazma izni
        3 = okuma izni
        toplami 7 butun izinler
    */
    chmod('test.txt', 0764);
?>
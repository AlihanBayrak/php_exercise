<?php
    $a = 10;

    switch  ($a){
        case 10:
            echo 'a 10a eşit';
        break;

        case 6:
            echo 'a 8e eşit';
        break;

        case $a % 4 == 3;
            echo '10u 4e bölünce kalan 3tür';
        break;
        
        default:
            echo 'hiçbir şeye eşit değil';
        break;

    }
    //a 10a eşit 
?>
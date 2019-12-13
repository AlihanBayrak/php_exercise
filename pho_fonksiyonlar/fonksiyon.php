<?php

    $yazi = "Alihan Bayrak Alihan Bayrak";

    function kisalt($str, $limit = 9)
    {
        $karakterSayisi = strlen($str);
        if ($karakterSayisi > $limit){
            $str = substr($str, 0, $limit) . "..";
        }
        return $str;
    }
    echo kisalt($yazi, 5);
    //Aliha..
?>
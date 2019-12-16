<?php

    function test(){
        return 'test';
    }

    if (function_exists('test')){
        echo 'test fonksiyonu vardir';
    } else {
        echo 'test fonksiyonu yoktur';
    }

    function kisalt($str, $limit = 9)
    {
        $karakterSayisi = strlen($str);
        if ($karakterSayisi > $limit){
            if (function_exists('mb_substr')){
                $str = mb_substr($str, 0, $limit, 'utf-8') . "..";
            } else {
                $str = substr($str, 0, $limit) . "..";

            }
        }
        return $str;
    }
?>
<?php

    declare(strict_types = 1); // kati kural
    function topla(int $sayi1, int $sayi2): string
    {
        return (string) ($sayi1 + $sayi2);
    }
    // echo topla(1,5);

    function arr(array $arr): string
    {
        return implode(',', $arr);
    }

    print_r(arr(['test', 'test2']));

?>
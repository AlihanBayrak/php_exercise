<?php

    /*
        func_num_args()
        func__get_args()
        func_get_arg()
        Bu 3 fonksiyonla fonksiyon icindeki parametreleri yonetebiliriz
    */

    function test()
    {
        echo func_num_args() . '<br>';
        print_r (func_get_args()) . '<br>';
        echo func_get_arg(1);
    }
    test('Alihan', 'Bayrak', 'Aydin');
?>
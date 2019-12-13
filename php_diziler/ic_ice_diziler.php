<?php
    /*
        Siteler
            Sosyal Medya
                Facebook
                instagram
                twitter
            Eğitim
                Udemy
                youtube
    */
    $kategoriler = [
        'siteler' => [
            'sosyal medya' => [
                'facebook',
                'instagram',
                'twitter'
            ],
            'eğitim' => [
                'udemy',
                'youtube'
            ]
        ]
    ];
    //print_r($kategoriler);
    define('uye', [
        'ad' => 'Alihan',
        'soyad' => 'Bayrak',
        'meslek' => 'Geliştirici',
        'sporlar' => [
            'futbol',
            'basketbol'
        ]
    ]);
    print_r(uye);
?>
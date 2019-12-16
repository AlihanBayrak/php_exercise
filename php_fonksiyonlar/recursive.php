<?php

    function say($sayi)
    {
        echo $sayi;
        if ($sayi < 10){
            say($sayi + 1);
        }
    }
    //say(1);
    //recursive fonksiyonu sinirsiz kategori mantigi

    $kategoriler = [
        [
            'id' => 1,
            'parent'=> 0,// en bastaki ana kategori demek
            'ad' => 'Dersler'
        ],
        [
            'id' => 2,
            'parent'=> 0,
            'ad' => 'Guncel'
        ],
        [
            'id' => 3,
            'parent'=> 0,
            'ad' => 'Blog'
        ],
        [
            'id' => 4,
            'parent'=> 1,
            'ad' => 'PHP Dersleri'
        ],
        [
            'id' => 5,
            'parent'=> 1,
            'ad' => 'HTML Dersleri'
        ],
        [
            'id' => 6,
            'parent'=> 4,
            'ad' => 'Recursiv Fonksiyonlar'
        ],
        [
            'id' => 7,
            'parent'=> 4,
            'ad' => 'Degisken Kullanimi'
        ]
    ];
    function kategoriListele($kategoriler, $parent = 0)
    {
        $html = '';
        $html .= '<ul>';
        foreach ($kategoriler as $kategori){
            if ($kategori['parent'] == $parent){
                $html .= '<li>' . $kategori['ad'];
                $html .= kategoriListele($kategoriler, $kategori['id']); 
                $html .= '</li>';
            }
        }
        $html .= '</ul>';
        return $html;
    }
    
    //echo kategoriListele($kategoriler);

    $arr = [
        'ad' => 'Alihan',
        'soyad' => 'Bayrak',
        'sporlar' => [
            'yuzme' => 'hayir',
            'kosma' => 'evet',
            'savunma_sporlari' => [
                'judo' => 'hayir',
                'karate' => 'hayir'
            ]
        ]
    ];

    function dizide_bul($dizi, $anahtar)
    {
        foreach ($dizi as $key => $val)
        {
            if ($key == $anahtar){
                return $val;
            }
            if (is_array($val)){
                $sonuc = dizide_bul($val, $anahtar);
                if ($sonuc){
                    return $sonuc;
                }
            }
        }
        return false;
    }
    
    echo dizide_bul($arr, 'kosma');
?>
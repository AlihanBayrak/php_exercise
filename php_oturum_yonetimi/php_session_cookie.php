<?php

session_start();

// $uye = [
//     'kullanici_adi' => 'alihan',
//     'sifre' => '123'
// ];
print_r($_SESSION);

// setcookie('uye[id]', 1, time() + 86400);
// setcookie('uye[kullanici_adi]', 'alihan', time() + 86400);
// setcookie('uye[sifre]', '123', time() + 86400);

print_r($_COOKIE);
?>
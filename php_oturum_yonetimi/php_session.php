<?php
session_start();

$_SESSION['kullanici_adi'] = 'Alihan';

print_r($_SESSION);
echo $_SESSION['kullanici_adi'];

session_destroy();

?>
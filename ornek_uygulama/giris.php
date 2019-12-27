<?php
    if (isset($_POST['submit'])){
        $kullanici_adi = $_POST['kullanici_adi'];
        $sifre = $_POST['sifre'];

        if (!$kullanici_adi || !$sifre){
            $hata = 'Lutfen kullanici adinizi ve sifrenizi girin';
        } elseif ($kullanici_adi != $uye['kullanici_adi']){
            $hata = 'Kullanici adiniz hatali';
        } elseif ($sifre != $uye['sifre']){
            $hata = 'Sifreniz hatali';
        } else {
            $_SESSION['zaman'] = time() + 20;
            $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
            // header() yonlendirme
            header('Location:/ornek_uygulama/');
        }
    }
?>


<?php if (isset($hata)): ?>
    <div style="border: 1px solid green">
    <?php echo $hata; ?>
    </div>
<?php endif; ?>


<form action="" method="post">
Kullanici Adi: <br>
<input type="text" name="kullanici_adi">
<hr>
Sifre: <br>
<input type="password" name="sifre"><br>
<input type="hidden" name="submit" value="1"><br>
<button type="submit">Giris Yap</button>
</form>
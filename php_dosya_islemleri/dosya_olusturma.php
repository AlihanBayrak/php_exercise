<?php
    // dosya olusturma
    // touch()

 // touch('text.txt');
    // touch('text2.txt', time() - 84000);
    /*
        fopen() - dosyayi acmamizi saglar
        fclose() - dosyayi kaptmamizi saglar
        fwrite() - dosyaya birseyler yazmamizi saglar
        fread() - tum icerigi okur
        fgets() - satir satir okur
        feof() - dosyanin sonuna gelinip gelinmedigini dondurur
    */
    /*
        r - okumak icin ac
        r+ - okumak ve yazmak icin ac
        w - yazmak icin ac (dosya yok ise olusturulur varsa)
        w+ - okumak ve yazmak icin ac
        a - yazmak icin yaz
        a+ - ikumak ve yazmak icin yaz
    */

    $icerik = 'Bu bir yazi ornegidir/';
    $dosya = fopen('test2.txt', 'w');
        fwrite($dosya, $icerik);
    fclose($dosya);


?>
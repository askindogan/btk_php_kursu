<?php

include "ayar.php";

//$query ="UPDATE kurslar SET baslik='Pyton Dersleri',altBaslik='İleri seviye Pyton dersleri' WHERE id=1";

//Sorguyu tüm satırlarda çalıştırmak istersek WHERE koşulunu kaldırmamız yeterli
$query ="UPDATE kurslar SET onay=0";

//Resim kolonunda onaylı yerleri değiştirdik.
$query ="UPDATE kurslar SET resim='2.jpg' WHERE onay=1";

$sonuc=mysqli_query($baglanti,$query);

if ($sonuc) {
    echo "Satır güncellendi";
}else {
    echo "Güncelleme hatası";
}

mysqli_close($baglanti);
<?php

include "ayar.php";

$query = "DELETE FROM kurslar WHERE id >24 and id<40";

$sonuc = mysqli_query($baglanti, $query);

//sorguda etkilenen satır sayısını getirir
$adet = mysqli_affected_rows($baglanti);

if ($sonuc) {
    echo $adet . " Kayıt silindi.";
} else {
    echo "HATA";
}




mysqli_close($baglanti);

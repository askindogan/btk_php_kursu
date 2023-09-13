<?php
/*
function selamlama($isim)
{
    return "Merhaba ".$isim."<br>";
}

echo selamlama("Aşkın");
echo selamlama("Ömer");
echo selamlama("Filiz");
echo "<br>";
*/
function yasHesapla($dogumYili){
    return date('Y')-$dogumYili;
}
echo "Merhaba Yaşınız: ".yasHesapla(1987);
echo "<br>";

function emeklilik($dogum,$isim)
{
    $yas=yasHesapla($dogum);
    $kalanSure=65-$yas;

    if ($kalanSure > 0) {
        return "$isim, emekliliğe $kalanSure yıl kaldı.";
    }else {
        return "$isim zaten emeklisiniz.";
    }
}

echo emeklilik(1987,"Aşkın");
?>
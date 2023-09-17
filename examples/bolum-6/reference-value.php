<?php 
//php de iki  türlü parametre gönderme şekli vardır
//reference parametre ve value parametre

function toplama($sayi){
    $sayi+=10;
    echo $sayi;
}

$ornekSayi=5;

toplama($ornekSayi);
echo "<br>";

echo $ornekSayi;

?>
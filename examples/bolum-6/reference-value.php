<?php 
//php de iki  türlü parametre gönderme şekli vardır
//reference parametre ve value parametre

function toplama($sayi){
    $sayi+=10;
    echo $sayi."<br>";
}

$ornekSayi=5;
toplama($ornekSayi); //Burada ram üzerinde örneğin 001112 => 15 şeklinde değer dönderir

echo $ornekSayi; // burada ise bir kopyasını oluşturup 001113 => 5 değerini dönderir
echo "<br>";
echo "------------";
echo "<br>";

//referans gönderme & işareti ile yapılır ve iki değeride aynı şekilde değiştirir ve ram üzerinde tek bir değer tutulur
function toplam(&$sayi){
    $sayi+=10;
    echo $sayi."<br>";
}

$ornekSayi=5;
toplam($ornekSayi);

echo $ornekSayi;
echo "<br>";


//Value değer gönderme işlemi
function yasHesapla($tarihler){

    for ($i=0; $i <count($tarihler) ; $i++) { 
        $tarihler[$i]=2023-$tarihler[$i];
    }
    return $tarihler;
}

$liste=array(1987,1988,2016);
echo "<pre>";
print_r(yasHesapla($liste));
echo "</pre>";
?>
<?php
//1-Kendisine gönderilen kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız.

function kelimeGoster($kelime, $adet){
for ($i=0; $i <= $adet; $i+=1) { 
echo "$kelime"."<br>";
}
}
kelimeGoster("1. sorunu cevabı" , 7);

//2-Dikdörtgen alan ve çevresini hesaplayan fonksiyonu yazınız.

function dikdortgenCevre($kisakenar,$uzunkenar)
{
    return (($kisakenar+$uzunkenar)*2);
}
echo "Dikdörtgenin çevresi : ". dikdortgenCevre(5,3). "cm dir."."<br>";

function dikdortgenAlan($a,$b)
{
    return $a*$b;
}

echo "Dikdörtgenin alanı : ". dikdortgenAlan(5,3). "cm dir."."<br>";
//3-Yazı tura uygulamasını fonksiyon kullanarak yapınız.

//4-Kendisine gönderilen bir sayının tam bölenlerini bir diziylşe döndüren fonksiyonu yazınız.

?>
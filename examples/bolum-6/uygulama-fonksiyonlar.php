<?php
//1-Kendisine gönderilen kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız.
echo "<b> 1-Kendisine gönderilen kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız.</b>" . "<br>";

function kelimeGoster($kelime, $adet)
{
    for ($i = 0; $i <= $adet; $i += 1) {
        echo "$kelime" . "<br>";
    }
}
kelimeGoster("1. sorunu cevabı", 7);

//2-Dikdörtgen alan ve çevresini hesaplayan fonksiyonu yazınız.
echo "<b>2-Dikdörtgen alan ve çevresini hesaplayan fonksiyonu yazınız.</b>" . "<br>";

$kisakenar = 2;
$uzunkenar = 3;

echo "Kısa Kenar : " . $kisakenar . "<br>";
echo "Uzun Kenar : " . $uzunkenar . "<br>";
function dikdortgenCevre($kisakenar, $uzunkenar)
{
    return (($kisakenar + $uzunkenar) * 2);
}
echo "Dikdörtgenin çevresi : " . dikdortgenCevre($kisakenar, $uzunkenar) . "cm dir." . "<br>";

function dikdortgenAlan($kisakenar, $uzunkenar)
{
    return $kisakenar * $uzunkenar;
}

echo "Dikdörtgenin alanı : " . dikdortgenAlan($kisakenar, $uzunkenar) . "cm dir." . "<br>";

//3-Yazı tura uygulamasını fonksiyon kullanarak yapınız.
echo "<b>3-Yazı tura uygulamasını fonksiyon kullanarak yapınız.</b>" . "<br>";

function yaziTura()
{
    $sayi = rand(1, 100);
    if ($sayi < 50) {
        echo "Yazı";
    } else {
        echo "Tura";
    }
}

yaziTura();
echo "<br>";
//4-Kendisine gönderilen bir sayının tam bölenlerini bir diziylşe döndüren fonksiyonu yazınız.
echo "<b>4-Kendisine gönderilen bir sayının tam bölenlerini bir diziye döndüren fonksiyonu yazınız.</b>" . "<br>";

function tamBolenleriBul($sayi)
{
    $tamBolenler = array();

    for ($i = 2; $i < $sayi; $i++) {
        if ($sayi % $i == 0) {
            array_push($tamBolenler, $i);
        }
    }

    return $tamBolenler;
}

print_r( tamBolenleriBul(20));


?>
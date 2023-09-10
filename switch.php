<?php
/*
Koşullu durumlar 
    1- if-else
    2- Switch bloğu
    3- Ternary Operatörü
*/

/*
Uygulama-1

$sayi = 7;

switch ($sayi) {
    case 5:
        echo "beş";
        break;
    case 6:
        echo "altı";
        break;
    case 7:
        echo "yedi";
        break;
    default:
        echo "yanlış veri";
        break;
}
*/

/*
Uygulama -2
$saat = 8;

if ($saat >= 7 and $saat <= 9) {
    echo "Günaydın";
} elseif ($saat >= 10 and $saat < 19) {
    echo "İyi Günler";
} elseif ($saat >= 19 and $saat <= 24) {
    echo "İyi akşamlar";
} elseif ($saat >= 0 and $saat < 7) {
    echo "İyi geceler";
} else {
    echo "Bu bir saat dilimi değil";
}

//Yukardaki durumun switch ile yazımı 

switch (true) {
    case ($saat >= 7 and $saat <= 9):
        echo "Günaydın";
        break;
    case ($saat >= 10 and $saat < 19):
        echo "İyi Günler";
        break;
    case ($saat >= 19 and $saat <= 24):
        echo "İyi akşamlar";
        break;
    case ($saat >= 0 and $saat < 7):
        echo "İyi geceler";
        break;
    default:
        echo "Bu bir saat dilimi değil";
        break;
}
*/

$ay = "eylül";

switch ($ay) {
    case 'aralık':
    case 'ocak':
    case 'şubat':
        echo "Kış Mevsimi";
        break;
    case 'mart':
    case 'nisan':
    case 'mayıs':
        echo "İlkbahar Mevsimi";
        break;
    case 'haziran':
    case 'temmuz':
    case 'ağustos':
        echo "Yaz Mevsimi";
        break;
    case 'eylül':
    case 'ekim':
    case 'kasım':
        echo "Sonbahar Mevsimi";
        break;
    default:
        echo "Yanlış veri";
        break;
}

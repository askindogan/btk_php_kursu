<?php

$a = 10;
$b = 20;
$c = 5;

//1-a,b çarpımı ile a,b,c toplamının farkı nedir ?

// $rslt=($a*$b)-($a+$b+$c);

// echo $rslt."<br>";

//2-a,b,c toplamının mod 3 ü nedir ?

// $rslt=($a+$b+$c) % 3;

// echo $rslt."<br>";

//3-b'nin C . kuvveti nedir ?

// $rslt=$b ** $c;

// echo $rslt."<br>";

//4- a için 50 ile 100 arasında mı kontrolü yapınız ?

// $rslt=($a>50) and ($a<100);

// var_dump($rslt)."<br>";

//5- a için pozitif çift kontrolü yapınız ?

// $rslt=($a>0 and $a % 2==0);

// var_dump($rslt)."<br>";

//6- username ve password ile uygulama giriş kontrolü yapınız?

// $username="provzax";
// $password="1234";

// $rslt=($username=="provzax" and $password=="1234" );

// echo "Giriş durumu: ". $rslt."<br>";

//7- a,b,c için büyüklük kontrolü yapınız?

// $rslt=($a > $b and $a > $c);

// echo "a değişkeni diğerlerinden büyüktür.Sonuç: ". $rslt."<br>";

// $rslt=($b > $a and $b > $c);

// echo "b  değişkeni diğerlerinden büyüktür.Sonuç: ". $rslt."<br>";

// $rslt=($c > $b and $c > $a);

// echo "c değişkeni diğerlerinden büyüktür.Sonuç: ". $rslt."<br>";

//8-2 vize(%60) ve  1 final(%40) notuna göre ortalama hesaplayınız.
//  a- Eğer ortalama 50 ve üstündeyse geçti değilse kaldı yazdırın. 
//  b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
//  c- Geçmek için finalden 70 alındığında ortalamanın önemi olmasın.

$vize1 = 60;
$vize2 = 60;
$final = 70;

$ortalama = ((($vize1 + $vize2) / 2) * 0.6) + ($final * 0.4); // 64

$gecmeDurumu = ($ortalama >= 50);

echo "Geçme Durumu: " . $gecmeDurumu . "<br>";

$gecmeDurumu = ($ortalama >= 50 and $final >= 50);

echo "Geçme Durumu: " . $gecmeDurumu . "<br>";

$gecmeDurumu = ($ortalama >= 50 or $final >= 70);

echo "Geçme Durumu: " . $gecmeDurumu . "<br>";

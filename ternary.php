<?php

$yas = 18;

if ($yas >= 18) {
    echo "Ehliyet alabilir";
} else {
    echo "Ehliyet alamaz";
}

echo "<br>";

//Yukardaki bloğun ternary operatörü ile yazımı

$sonuc = ($yas >= 18) ? "ehliyet alabilir" : "ehliyet alamaz";
echo $sonuc;

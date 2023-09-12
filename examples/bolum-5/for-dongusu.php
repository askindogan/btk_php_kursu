<?php

//for,while

/*
for ($i=1; $i <= 100; $i+=3) { 
   echo $i."<br>";
}
echo "Döngü bitti.";
*/

/*
//if blogu içerisinde Mod fonksiyonu kullanıp tek sayıları yazdırabiliriz.
for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 2 == 1) {
        echo $i . "<br>";
    }
}
echo "Döngü bitti.";
*/

//Mod fonksiyonu kullanıp çift sayıları yazdırabiliriz.
for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo "Döngü bitti.";
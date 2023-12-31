<?php
/*
    fopen("dosya_ismi","dosya açma modu");

    dosya açma modları:

    r  : Dosya okuma modunda açılır. İmleç dosyanın başında yer alır.
    w  : Dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir. 
    a  : Dosya yazma modunda açılır. İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
    x  : Dosya yazma modunda açılır. Dosya yoksa oluşturulur, varsa False döner.

    r+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır.
    w+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir. 
    a+ : Dosya yazma ve okuma modunda açılır. İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
    x+ : Dosya okuma ve yazma modunda açılır. Dosya yoksa oluşturulur, varsa False döner.

*/

$myfile= fopen("dosya.txt","r");
$size=filesize("dosya.txt");

//fread istenilen boyut kadar okur
// echo fread($myfile,$size);
//Gets satıra satır okur.
// echo fgets($myfile);
// echo fgets($myfile);
// echo fgets($myfile);

//döngü içinde tamamını okuma
while(!feof($myfile)){
    echo fgets($myfile)."<br>";
}

//Bellek üzerinde kaldığı için işlem sonunda mutlaka kapatalım
fclose($myfile);
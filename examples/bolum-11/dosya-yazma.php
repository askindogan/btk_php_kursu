<?php

$myfile=fopen("dosya2.txt","a");

// \n bu işaretler yeni bir satırdan işlemi devam ettirir
$title=" PHP Dersleri\n";

fwrite($myfile,$title);

fclose($myfile);

//Eklenen bilgileri gösterme
$myfile=fopen("dosya2.txt","r");

while(!feof($myfile)){
    echo fgets($myfile)."<br>";
}
fclose($myfile);

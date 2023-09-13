<?php

function toplama()
{
    return 20 + 50;
}

echo toplama();
echo "<br>";

function sene()
{
    return date('Y');
}

//Fonksiyon içinde fonksiyon kullanma

function yasHesaplama()
{
    return sene() - 1987;
}

$yas = yasHesaplama();

echo $yas;
echo "<br>";

function saat()
{
    return date('h');
}

function selamlama()
{
    if (saat()<12) {
        echo"Günaydın";
    }else{
        echo"İyi geceler";

    }

}

echo selamlama();



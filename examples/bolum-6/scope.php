<?php
// iki çeşit scope (kapsam) global ve local scope.
//dışarda tanılmadığımız değişken global scope dır.
$x=5;

echo $x;
echo "<br>";

function test1(){
//local scope
$x=10;
echo $x;

}

echo test1();

echo "<br>";

function test2(){
    $x=20;
    echo $x;
}
echo test2();
echo "<br>";

function test3(){
    //local içinde global scope kullanma/çağırma
    global $x;
    echo $x;
}
echo test3();
echo "<br>";
echo "<br>";


function test4(){
    //local içinde global scope değiştirme/güncelleme
    $GLOBALS["x"]=40;
}

test4();
echo "<br>";

echo $x;


<?php

session_start();

//session silme
//unset($_SESSION["username"]);
//tüm sessionları siler
session_unset();
//okuma işlemlerinden önce set edilmişmi kontrol edelim

if (isset($_SESSION["username"])) {
    echo $_SESSION["username"];
    echo "<br>";
} else {
    echo "username Session yok.";
    echo "<br>";
}

if (isset($_SESSION["password"])) {
    echo $_SESSION["password"];
    echo "<br>";
} else {
    echo "password Session yok.";
    echo "<br>";
}

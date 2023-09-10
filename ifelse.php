<?php

/*
Koşullu durumlar 
    1- if-else
    2- Switch bloğu
    3- Ternary Operatörü
*/

/*
if (true) {
    echo "Koşul true olduğu için bu kısım yazılacaktır." . "<br>";
}

if (false) {
    echo "Koşul false olduğu için bu kısım yazılmayacaktır." . "<br>";
}
*/

$username = "admin";
$password = "1234";

/*
$isLoggedIn = ($username=="admin" and $password=="1234");

if ($isLoggedIn) {
    echo "Başarılı bir şekilde giriş yapıldı"."<br>"." Hoşgeldin: "."<b>". $username."</b>";
}else {
    echo "Giriş bilgilerini kontrol ediniz.";
}
*/

if ($username == "admin") {

   if ($password == "1234") {
    echo "Başarılı bir şekilde giriş yapıldı"."<br>"." Hoşgeldin: "."<b>". $username."</b>";
   }else {
    echo "Parola hatalı.";
   }

} else {

        echo "Kullanıcı adı hatalı."; 

}

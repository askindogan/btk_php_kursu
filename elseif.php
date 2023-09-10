<?php
/*
Koşullu durumlar 
    1- if-else
    2- Switch bloğu
    3- Ternary Operatörü
*/

/*
uygulama-1

$username = "admin";
$password = "1234";


if ($username != "admin") {
    echo "Kullanıcı adı hatalı.";
} elseif ($password != "1234") {
    echo "Parola hatalı.";
} else {
    echo "Başarılı bir şekilde giriş yapıldı" . "<br>" . " Hoşgeldin: " . "<b>" . $username . "</b>";
}
*/

$saat = 21;

if ($saat >= 7 and $saat <= 9) {
    echo "Günaydın";
} elseif ($saat >= 10 and $saat < 19) {
    echo "İyi Günler";
}
elseif ($saat >= 19 and $saat <= 24) {
    echo "İyi akşamlar";
}
elseif ($saat >= 0 and $saat < 7) {
    echo "İyi geceler";
}
else {
    echo "Bu bir saat dilimi değil";
}

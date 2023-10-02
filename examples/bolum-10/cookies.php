<?php

echo date("H:i:s")."<br>";
echo time()."<br>";

//Tanımlama
setcookie("username","provzax",time()+(60*60*24));
setcookie("auth","true",time()+(60*60*24)*24);

if (isset($_COOKIE["username"])) {
    echo "Tanımlanan Cookie bilgisi: ";
    echo $_COOKIE["username"]."<br>";
}else{
    echo "Cookie bilgisi yoktur.";
}
echo "Tanımlanan Cookie bilgisi: ";
echo $_COOKIE["auth"];

//güncelleme -username cookiesi aşağıdaki şekilde güncellendi
setcookie("username","askindogan",time()+(60*60*24));
//Silme- şuandan önceki bir zamana ayarlarsak silinir
setcookie("username","askindogan",time()-(60*60));


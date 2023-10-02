<?php

echo date("H:i:s")."<br>";
echo time()."<br>";

setcookie("username","provzax",time()+(60*60*24));
setcookie("auth","true",time()+(60*60*24)*24);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

exit;
if (isset($_COOKIE["username"])) {
    echo "Tanımlanan Cookie bilgisi: ";
    echo $_COOKIE["username"]."<br>";
}else{
    echo "Cookie bilgisi yoktur.";
}
echo "Tanımlanan Cookie bilgisi: ";
echo $_COOKIE["auth"];

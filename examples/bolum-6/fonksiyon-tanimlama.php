<?php

//Fonksiyon tanımlama
/*
function selamlama() {
echo "Merhaba BTK"."<br>";
}

selamlama() //fonksiyonlar çağırılmadan çalışmazlar.
*/


function selamlama() {
    for ($i=0; $i <5 ; $i++) { 
        echo "Merhaba BTK"."<br>";
    }
}
    
    selamlama();

function toplama() {
        $a=12;
        $b=30;
        echo $a+$b;
}
        
    toplama();
    


?>
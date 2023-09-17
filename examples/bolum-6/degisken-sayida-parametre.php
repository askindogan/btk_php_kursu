<?php 

//$sayiDizisi=array(10,20,30); 1. yöntem
//$sayiDizisi=array(10,20,30); 2. yöntem ile de değişken sayıda anlamında (...) ile direk sonuç kısmında
//                             tanımlama yapıyoruz. 

function toplam(...$sayiDizisi){

    $toplam=0;
    foreach($sayiDizisi as $sayi) {
        $toplam+=$sayi;
    }
    return $toplam;
}

echo toplam(10,20,40);
echo "<br>";
echo toplam(10,20,40,35);
?>

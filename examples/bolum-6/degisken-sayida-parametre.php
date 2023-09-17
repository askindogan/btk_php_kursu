<?php 

$sayiDizisi=array(10,20,30);

function toplam($sayiDizisi){

    $toplam=0;
    foreach($sayiDizisi as $sayi) {
        $toplam+=$sayi;
    }
    return $toplam;
}

echo toplam($sayiDizisi);
?>

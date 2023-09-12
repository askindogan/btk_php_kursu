<?php
/*
//dizileri döngüler yardımı ile yazdırabiliriz

$ogrenciler = array("ali", "ayşe", "ahmet","deniz");

for ($i = 0; $i < count($ogrenciler); $i++) {
    echo $ogrenciler[$i]."<br>";
}

$i=0;
while ($i<count($ogrenciler)) {
    echo $ogrenciler[$i]."<br>";
    $i++;
}
*/

/*
$urunler=array(
    array("kalem",35),
    array("silgi",5),
    array("defter",50),
    array("cetvel",65),
);

for ($i=0; $i < count($urunler); $i++) { 
    echo $urunler[$i][0]." - ".$urunler[$i][1];
    echo "<br>";
}
*/

$urunler=array(
    "100" => array(
        "urun_adi"=>"kalem",
        "fiyat"=>35
    ),
    "101" => array(
        "urun_adi"=>"silgi",
        "fiyat"=>23
    ),
    "102" => array(
        "urun_adi"=>"cetvel",
        "fiyat"=>58
    ),
);

$keys=array_keys($urunler); // key-value dizilerinde öncelikle key e ulaşmamız lazım

for ($i=0; $i < count($urunler); $i++) { 

    echo $urunler[$keys[$i]]["urun_adi"]." - ".$urunler[$keys[$i]]["fiyat"];
    echo "<br>";
}


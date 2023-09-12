<?php
/*
$ogrenciler = array("ali", "ayşe", "ahmet","deniz");

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci;
    echo "<br>";
}
*/

/*
$urunler=array(
    array("kalem",35),
    array("silgi",5),
    array("defter",50),
    array("cetvel",65),
);

foreach ($urunler as $urun) {
echo $urun[0]." - ".$urun[1]."<br>"; 
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

foreach ($urunler as $key => $value) {

    echo $key." - ".$value["urun_adi"]." - ".$value["fiyat"]."<br>";

}

?>
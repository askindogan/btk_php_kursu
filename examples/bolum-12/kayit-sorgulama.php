<?php

include("ayar.php");

$query = "SELECT * FROM kurslar";

$sonuc=mysqli_query($baglanti,$query);


while ($row=mysqli_fetch_row($sonuc)) {
    echo $row[0]." - ".$row[1]." - ".$row[2];
    echo "<br>";
}

echo "<hr>";

//verileri assosyatif olarak yazdırma (key value)

$sonuc=mysqli_query($baglanti,$query);//Bu sorguyu yeniden eklememiz gerekiyor yukarıda sorgu işlemi bitti 

while ($row=mysqli_fetch_assoc($sonuc)) {
    //echo $row["id"]." ".$row["baslik"]." ".$row["resim"];
    //echo "<br>";

    echo "<pre>";
    print_r($row);
    echo "</pre>";

}
mysqli_close($baglanti);


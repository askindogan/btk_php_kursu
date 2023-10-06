<?php

include "ayar.php";

// $query = "SELECT * FROM kurslar";
// $query = "SELECT * FROM kurslar WHERE id=1";
// $query = "SELECT * FROM kurslar WHERE id > 1";
// $query = "SELECT * FROM kurslar WHERE onay=1";
// $query = "SELECT * FROM kurslar WHERE id>5 and id<9";
// $query = "SELECT * FROM kurslar WHERE baslik='Python Kursu'";
$query = "SELECT * FROM kurslar WHERE baslik like '%php%' and onay=1";


$sonuc = mysqli_query($baglanti, $query);
// echo "Veri tabanında kayıtlı satır sayısı: ".mysqli_num_rows($sonuc)."<br>";

if (mysqli_num_rows($sonuc)) {
    while ($row = mysqli_fetch_row($sonuc)) {
        echo $row[0] . "-" . $row["1"];
        echo "<br>";
    }
} else {
    echo "Kayıt yoktur.";
}

mysqli_close($baglanti);

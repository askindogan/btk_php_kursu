<?php

include "ayar.php";

$query ="UPDATE kurslar SET baslik='Pyton Dersleri',altBaslik='İleri seviye Pyton dersleri' WHERE id=1";
$sonuc=mysqli_query($baglanti,$query);

mysqli_close($baglanti);
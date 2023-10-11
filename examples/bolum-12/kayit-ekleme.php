<?php

include("ayar.php");

$query = "INSERT INTO kurslar (baslik, altBaslik, resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
          VALUES ('Bilişim Kursu', 'İleri seviye React Kurları', '5.jpg','10.10.2023',10,1,1);";


// $query .= "INSERT INTO kurslar (baslik, altBaslik, resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
//           VALUES ('Angular Kursu', 'İleri seviye React Kurları', '5.jpg','10.10.2023',10,1,1);";

// $query .= "INSERT INTO kurslar (baslik, altBaslik, resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
//           VALUES ('ASP.Net Kursu', 'ileri seviye React Kurları', '5.jpg','10.10.2023',10,1,1);";

$sonuc=mysqli_query($baglanti,$query);
$inserted_id=mysqli_insert_id($baglanti);
//Çoklu veri ekleme için aşağıdaki yöntem kullanılacak. Yukarıdaki stringleride .= operatörü ile birleştirip metin sonuna ")"  işererinden önce ";" eklenmeli
//$sonuc=mysqli_multi_query($baglanti,$query);


if ($sonuc) {
echo "Kayıt eklendi. Son eklenen kayıt numarası: ".$inserted_id;  
}else {
  echo"Bir hata oluştu.";
}

// if ($baglanti->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $baglanti->error;
// }

mysqli_close($baglanti);


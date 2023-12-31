<?php

function getCategories()
{
    include "ayar.php";

    $query = "SELECT * FROM kategoriler";
    $sonuc = mysqli_query($baglanti, $query);
    mysqli_close($baglanti);
    return $sonuc;
}

function createCategories(string $kategori)
{
    include "ayar.php";

    $query = "INSERT INTO kategoriler(kategori_adi) VALUES (?)";
    $stmt = mysqli_prepare($baglanti, $query);

    mysqli_stmt_bind_param($stmt, 's', $kategori);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $stmt;
}

function getDb()
{
    $myfile = fopen("db.json", "r");
    $size = filesize("db.json");
    $data = json_decode(fread($myfile, $size), true);
    fclose($myfile);
    return $data;
}

function kursEkle(string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $onay = true)
{
    $db = getDb();

    array_push($db["kurslar"], array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    ));

    $myfile = fopen("db.json", "w");
    fwrite($myfile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myfile);
}

//Kurs başlığını url ye çeviren karakter düzenleyen fonksiyon
function urlDuzenle($baslik)
{
    return str_replace([" ", "ç", "@", ".", "(", ")"], ["-", "c", "", "-", "", ""], strtolower($baslik));
}

//Alt Başlık 50 karakterden büyükse sonuna ... ekleyen fonksiyon
function kisaAciklama($altBaslik)
{
    if (strlen($altBaslik) > 50) {
        return substr($altBaslik, 0, 50) . "...";
    } else {
        return $altBaslik;
    }
}

//Register sayfasında bulunan formlardan (input) girilen bilgilerin güvenli bir şekil almasına sağlıyoruz. 
function safe_html($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

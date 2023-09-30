<?php

if (isset($_POST['btnFileUpload'])) {

    //Dosya seçilmiş mi?
    //Dosya boyutu kontrolü.
    //Dosya uzantısı (jpg,png) kontrolü.
    //Dosya ismi kontrolü - random.

    $uploadOk = true;
    $dest_path = "./uploadedFiles/";
    $fileName = $_FILES['fileToUpload']['name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileExtentions = array('jpg', 'jpeg', 'png');

    //Dosya seçilmiş mi?
    if (empty($fileName)) {
        $uploadOk = false;
        echo "Lütfen bir dosya seçiniz.";
        echo "<br>";
    }

    //Dosya boyutu kontrolü -5 MB DAN KÜÇÜK  -
    if ($fileSize > 5000000) {
        $uploadOk = false;
        echo "Dosya boyutu çok fazla.";
        echo "<br>";
    }

    //Dosya uzantısı kontrolü
    $fileExplode = explode(".", $fileName);

    $fileExplodedName = $fileExplode[0];
    $fileExplodedExtension = $fileExplode[1];

    if (!in_array($fileExplodedExtension, $fileExtentions)) {
        $uploadOk = false;
        echo "Dosya uzantısı kabul edilemiyor.";
        echo "<br>";
        echo "Kabul edilen uzantılar:" . implode(", ", $fileExtentions);
        echo "<br>";
    }

    // Yeni dosya adı random belirleme
    $fileNameNewRandom = md5(time()) . "." . $fileExplodedExtension;


    //Dosya taşıma işlemi
    $fileSourcePath = $_FILES['fileToUpload']['tmp_name'];
    $fileDestPath = $dest_path . $fileNameNewRandom;

    if (!$uploadOk) {
        echo "Dosya yüklenemedi.";
    } else {
        if (move_uploaded_file($fileSourcePath, $fileDestPath)) {
            echo "Dosya Yüklendi";
        } else {
            echo "Hay aksi olmadı :(";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Bir form ile dosya gönderme işlemi için 
    form nesnesi içine mutlaka enctype="multipart/form-data" eklenmeli  -->
    <h1>Tekli Dosya Upload işlemi</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload">
        <button type="submit" name="btnFileUpload">Yükle</button>
    </form>

</body>

</html>
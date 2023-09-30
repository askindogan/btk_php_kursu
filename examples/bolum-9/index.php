<?php

if (isset($_POST['btnFileUpload'])) {

    $uploadOk = true;
    $dest_path = "./uploadedFiles/";
    $filename = $_FILES['fileToUpload']['name'];
    $fileSize = $_FILES['fileToUpload']['size'];

    if (empty($filename)) {
        $uploadOk = false;
        echo "Lütfen bir dosya seçiniz.";
        echo "<br>";
    }

    if ($fileSize > 300000) {
        $uploadOk = false;
        echo "Dosya boyutu çok fazla.";
        echo "<br>";
    }

    $fileSourcePath = $_FILES['fileToUpload']['tmp_name'];
    $fileDestPath = $dest_path . $filename;

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
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload">
        <button type="submit" name="btnFileUpload">Yükle</button>
    </form>

</body>

</html>
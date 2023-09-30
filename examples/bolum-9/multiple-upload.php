<?php

if (isset($_POST['btnFileUpload'] )) {

    $fileCount=count($_FILES['fileToUpload']['name']);
    for ($i=0; $i < $fileCount; $i++) { 
        $fileTmpPath=$_FILES['fileToUpload']['tmp_name'][$i];
        $fileName=$_FILES['fileToUpload']['name'][$i];

        $destName="multiUploadedFiles/". $fileName;
        if (move_uploaded_file($fileTmpPath,$destName)) {
           echo $fileName." dosyası yüklendi"."<br>";
        }
        else {
            echo "dosya yükleme hatası"."<br>";
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
    form nesnesi içine mutlaka enctype="multipart/form-data" eklenmeli  
    Çoklu dosya eklemek için ise input içerisine multiple="multiple" eklenmeli-->

    <h1>Çoklu Dosya Upload işlemi</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload[]" multiple="multiple">
        <button type="submit" name="btnFileUpload">Yükle</button>
    </form>
</body>

</html>
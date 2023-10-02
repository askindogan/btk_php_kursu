<?php

//Buton POST olduğunda işlem çalışacak kodlar.
if (isset($_POST['btnFileUpload'])) {

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

exit;
    $fileCount = count($_FILES['fileToUpload']['name']);
    $maxFileSize = (1024 * 1024) * 1;
    $fileTypes = array("image/jpeg", "image/jpg", "image/png");
    $uploadOk = true;

    if ($fileCount > 2) {
        $uploadOk = false;
        echo "Max. 2 dosya yükleyebilirsiniz.";
    }

    //Eğer upload true ise yani yukarıdaki şartı geçtiyse
    if ($uploadOk) {

        for ($i = 0; $i < $fileCount; $i++) {

            $fileTmpPath = $_FILES['fileToUpload']['tmp_name'][$i];
            $fileName = $_FILES['fileToUpload']['name'][$i];
            $fileSize = $_FILES['fileToUpload']['size'][$i];
            $fileType = $_FILES['fileToUpload']['type'][$i];

            if (in_array($fileType, $fileTypes)) {

                if ($fileSize > $maxFileSize) {
                    echo "Max. dosya boyutu 1 MB olmalıdır.";
                } else {

                    $fileNameExplode = explode(".", $fileName);
                    $fileNameFirst = $fileNameExplode[0];
                    $fileNameExtension = $fileNameExplode[1];

                    $newFileName = $fileName . "-" . rand(0, 99999) . "." . $fileNameExtension;
                    $destName = "multiUploadedFiles/" . $newFileName;

                    if (move_uploaded_file($fileTmpPath, $destName)) {
                        echo $newFileName . " dosyası yüklendi" . "<br>";
                    } else {
                        echo  $newFileName . "dosya yükleme hatası" . "<br>";
                    }
                }
            } else {
                echo "dosya uzantısı kabul edilmiyor" . "<br>";
                echo "Kabul edilen dosya uzantısı: " . implode(", ", $fileTypes) . "<br>";
            }
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
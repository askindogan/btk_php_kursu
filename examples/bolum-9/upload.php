<?php

if (isset($_POST['btnFileUpload'])) {
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES['fileToUpload']);
    // echo "</pre>";

    $dest_path="./uploadedFiles/";   
    $filename=$_FILES['fileToUpload']['name'];
    $fileSourcePath=$_FILES['fileToUpload']['tmp_name'];
    
    $fileDestPath=$dest_path.$filename;

    if (move_uploaded_file($fileSourcePath,$fileDestPath)) {
        echo "Dosya Yüklendi";
    } else {
        echo "HATA!! Dosya Yüklenemedi";    
    }
    
}

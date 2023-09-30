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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" >
        <button type="submit" name="btnFileUpload">Yükle</button>
    </form>

</body>

</html>
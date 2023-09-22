<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //Formlar default olarak method olarak GET gelir
    //Form taglarında bir action belirlemezsek default olarak aynı sayfada çalışır.
    <form action="yazdir.php" method="GET">
        <input type="text" name="q">
        <input type="text" name="category">
        <button type="submit">Gönder</button>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Formlar default olarak method olarak GET gelir</li>
        <li>Form taglarında bir action belirlemezsek default olarak aynı sayfada çalışır.</li>
    </ul>
    <form action="yazdir.php" method="GET">
        <input type="text" name="q">
        <input type="text" name="category">
        <button type="submit">Gönder</button>
    </form>
    
</body>
</html>
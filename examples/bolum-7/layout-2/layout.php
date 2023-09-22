<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) echo $title . ' | '; ?>phpkursu.com</title>
</head>

<body>

    <header>
        <?php include $menu; ?>
    </header>

    <main>
        <p>
            <?php include $content; ?>
        </p>
    </main>

    <footer>
        Tüm hakları saklıdır.
    </footer>
</body>

</html>
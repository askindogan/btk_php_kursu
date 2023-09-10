<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = rand(1, 10);
    $b = 1;
    for ($i = 1; $i <= $a; $i++) {
        $b = $b * $i;
    }
    echo $a . '!=' . $b;

    ?>
</body>

</html>
<?php
function intro()
{
    $parametreSayisi = func_num_args(); //Bu fonksiyon içinde bulunan parametrenin sayısını gösterir
    if ($parametreSayisi == 0) {
        echo "Parametre Yok.";
    } else {
        $parametreler = func_get_args(); //Bu fonk ise prametreleri dönderir.
        foreach ($parametreler as $parametre) {
            echo $parametre . "<br>";
        }
    }
}
intro();
// intro("Aşkın", "Ömer", 36);

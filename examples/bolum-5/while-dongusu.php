<?php

//for,while

/*
for ($i=1; $i <= 100; $i+=1) { 
   echo $i."<br>";
}
echo "Döngü bitti.";
*/
/*
//kullanım şekli
while (true) {
    # code...
}
*/

/*
//for döngüsü ile yaptığımız sıralamanın aynısı
$i=1;
while ($i <= 100) {
    echo $i."<br>";
    $i+=1;
}
*/

// 1 den 100 kadar olan sayıların toplamını alma
$i=1;
$toplam=0;  

while ($i <= 100) {
    $toplam +=$i;
    $i+=1;
}

echo $toplam;


?>
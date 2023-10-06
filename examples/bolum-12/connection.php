<?php

//sunucu => coursedb
//php=>mysqli
//php=>pdo

const host ="localhost";
const username ="root";
const password ="";
const database ="coursedb";

$baglanti=mysqli_connect(host,username,password,database);

if (mysqli_connect_errno()>0) {
    die("data: ".mysqli_connect_errno());
}
    echo "Mysql Connected successfully";
    echo "<br>";
    //sql sorguları burda oluşturulabilir


mysqli_close($baglanti);
echo "Bağlantı kapatıldı.";



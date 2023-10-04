<?php

$myfile=fopen("course.json","r");
$myfileSize=filesize("course.json");

$jsonString=fread($myfile,$myfileSize);

echo"<pre>";
echo $jsonString;
echo"</pre>";

echo gettype($jsonString); //string olarak değer dönderir
echo "<br>";
//echo $jsonString["title"];//string veri döndüğü için key value değere ulaşamayız

// string to array =>decode
$jsonArray= json_decode($jsonString,true);

echo $jsonArray["title"];
echo "<br>";
echo $jsonArray["description"];
echo "<br>";
echo $jsonArray["image"];


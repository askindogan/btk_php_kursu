<?php

$course= array(
    "title"=>"js kursu",
    "description"=>"ileri seviye javaScript Dersleri",
    "image"=>"2.jpg"
);

echo $course["title"];

// array to json string

$jsonString= json_encode($course,JSON_PRETTY_PRINT);

$myfile=fopen("course2.json","w");
fwrite($myfile,$jsonString);
fclose($myfile);
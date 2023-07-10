<?php

$Season = $_POST['Season'];
$Lesson =  $_POST['Lesson'];
$Quiz = $_POST['Quiz'];

$file = "$Season/$Lesson/Quiz/$Quiz.txt";

if(file_exists("$Season/$Lesson/Quiz/$Quiz.txt")){
    die(readfile("$Season/$Lesson/Quiz/$Quiz.txt")); // Read Answer Quiz
}
die('وای بر من! به مشکل خوردیم!');
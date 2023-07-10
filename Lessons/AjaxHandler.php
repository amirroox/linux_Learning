<?php

$Season = $_POST['Season'];
$Lesson =  $_POST['Lesson'];
$Quiz = $_POST['Quiz'];

die(readfile("$Season/$Lesson/Quiz/$Quiz.txt")); // Read Answer Quiz
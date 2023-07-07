<?php

function Next_Lesson($lesson = '' , $text = null , $end = 0) {  // Next Helper Lesson in Lesson
    if (!$end){
        echo "<a href='../$lesson' class='md:hidden bg-blue-800 hover:bg-red-500 py-1'> " ;
        echo "بعدی : " . ($text ?? $lesson) ;
        echo "</a>";
        return;
    }
    echo "<a href='../../$lesson' class='md:hidden bg-blue-800 hover:bg-red-500 py-1'> " ;
    echo "بعدی : " . ($text ?? $lesson) ;
    echo "</a>";
}

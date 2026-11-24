<?php

    /* 
        What it does: Tells a tale and counts the number of chapters a night and prints the chapter
                      cliffhanger. The tale stops after 12 chapters
        What it assumes: Assumes to call it a night once it reaches a limit of 12 chapters. Cliffhanger depends on 
                         'night * chapter' so changing the bounds moves every cliffhanger
        What breaks: If you do not reset the keep_going_night to true the script will stop after the first night.
                     If the outer loop doesn't see a patience flag and extra night starts after the tale should
                     have ended.
                     
    */
    $nights_told = 0;
    $chapters_told = 0;
    $keep_going_night = true;
    $keep_going_chapters = true;

    for($n = 1 ; $n <= 5 && $keep_going_night === true && $keep_going_chapters === true; $n++){

        for($c = 1 ; $c <= 10 &&  $keep_going_night === true && $keep_going_chapters === true; $c++){
            
            echo "Night $n, Chapter $c\n";
    
            if(($n * $c) % 6 === 0){
                echo "-- cliffhanger! --\n";
                $keep_going_night = false;
            }

            $chapters_told++;
            
            if($chapters_told >= 12){
                 $keep_going_chapters = false;
                 $keep_going_night = false;
            }
            
        }
        $keep_going_night = true;
        $nights_told++;
        echo "\n";

    }
    echo "Nights Told = $nights_told\nChapters Told: $chapters_told\n";

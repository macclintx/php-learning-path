<?php

    /* 
        What is does: Tells a tale and counts the number of chapters told a night and prints when the chapter
                      cliffhanger is told. The tale stops once 12 chapters have been told
        What it assumes: Assumes the to call it a night once 12 chapters are told. Cliffhanger depends on 
                         'night * chapter' so changing the bounds moves every cliffhanger
        What breaks: Leaving out the value 2 in the second break, it will break only the inner loop, hence
                     the outer loop continues even if chapters told is >= 12.
    */
    $nights_told = 0;
    $chapters_told = 0;
    for($n = 1 ; $n <= 5; $n++){

        for($c = 1 ; $c <= 10 ; $c++){
            $chapters_told++;
            echo "Night $n, Chapter $c\n";
    
            if(($n * $c) % 6 === 0){
                echo "-- cliffhanger! --\n";
                break;
            }
            if($chapters_told >= 12){
                break 2; //break out of both inner and outer loops
            }

    
        }
        $nights_told++;
        echo "\n";

    }
    echo "\nNights Told = $nights_told\nChapters Told: $chapters_told\n";

<?php

    /* 
        What is does: 
        What it assumes:
        What breaks:
    */
    $nights_told = 0;
    $chapters_told = 0;
    for($n = 1 ; $n <= 5; $n++){

        for($c = 1 ; $c <= 10 ; $c++){
            $chapters_told++;
            echo "Night $n, Chapter $c\n";
    
            if($chapters_told >= 12){
                break 2; //break out of both inner and outer loops
            }

            if(($n * $c) % 6 === 0){
                echo "-- cliffhanger! --\n";
                break;
            }
    
        }
        $nights_told++;
        echo "\n";

    }
    echo "\nNights Told = $nights_told\nChapters Told: $chapters_told\n";

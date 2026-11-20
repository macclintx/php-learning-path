<?php
    /* 
        What it does: prints the multiplication table for numbers 1 - 12
        What is assumes: printf assumes the largest product has 3 digits hence put the spacing at %3d
        What breaks it: the number 12 is written in three separate places. If you change the size,
                        you have to change all three, and you also have to check the column width
                        Also if the size of the product is 4 digits, you have to change column widht
                        to %4d
    */

    echo "Multiplication Table for numbers 1 - 12\n\n";
    echo"     ";
    for($i = 1 ; $i <= 12 ; $i++ ){
        printf("%3d| ", $i);
    }
    echo "\n";

    $counter = 0;
    for($i = 1 ; $i <= 12 ; $i++){
            
        printf("%3d| ", $i);
        for($j = 1; $j <= 12  ; $j++){
            $result = $i * $j;
            printf("%3d| ", $result);
            $counter++;
        }
        echo "\n";


    }
    echo "Inner loop run $counter times";
<?php
    /*
        What it does: builds a FizzBuzz using switch
        What it assumes: assumes the dividers are 3 and 5 and stops dividing at 30
        What breaks: when you leave out the break statement, it will run all the cases, leave out the default statement it will 
                     only print fizz, buzz and fizzbuzz. Also the order of conditons
        
        
    */

    for( $i = 1 ; $i <= 30 ; $i++){
        switch(true){
            case $i % 3 === 0 && $i % 5 === 0:
                echo "FizzBuzz\n";
                break;
            case $i % 3 === 0:
                echo "Fizz\n";
                break;
            case $i % 5 === 0:
                echo "Buzz\n";
                break;
            default:
                echo "$i\n";
                break;
        }
    }
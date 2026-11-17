<?php

/* 
    What it does: builds a fizzbuzz with if else
    What it assumes: the dividers are 3 and 5 and final number is 30
    what breaks: when the ordering of the condition is wrong you will have a problem with numbers that are divisible by 3 and 5
*/
   
    for( $i = 1 ; $i <=30 ; $i++ ){

        if( $i % 3 === 0 && $i % 5 === 0 ){
            echo "FizzBuzz\n";
        }elseif( $i % 3 === 0){
            echo "Fizz\n";
        }elseif( $i % 5 === 0 ){
            echo "Buzz\n";
        }else{
            echo "$i\n";
        }
        
    }
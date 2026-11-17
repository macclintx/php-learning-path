<?php   

    /*
        What it does: builds a truth table generator to build intuition for short circuit evaluation and precedence
        What it assumes: assumes $t and $f and true, false respectively
        What breaks: breaks when you dont use () to show precedence over = as it will give you wrong readings.
     */
    $t = true;
    $f = false;

    //and
    var_dump($t && $t); //bool(true)
    var_dump($t && $f); //bool(false)
    var_dump($f && $t); //bool(false)
    var_dump($f && $f); //bool(false)

    //or
    var_dump($t || $t); //bool(true)
    var_dump($t || $f); //bool(true)
    var_dump($f || $t); //bool(true)
    var_dump($f || $f); //bool(false)

    //not
    var_dump(!$t); //bool(false)
    var_dump(!$f); //bool(true)

    $calls = 0;

    $t && ++$calls; 
    var_dump($calls); //int(1)

    $calls = 1;
    $t && --$calls;
    var_dump($calls); //int(0)

    $calls = 0;
    $f && ++$calls;
    var_dump($calls); //int(0)
    
    $calls = 1;
    $f && --$calls;
    var_dump($calls); //int(1) short circuit here, it did not move to the --$call because the result will be false
    
    $calls = 0;
    $t || ++$calls;
    var_dump($calls); //int(0)

    $calls = 1;
    $t || --$calls;
    var_dump($calls); //int(1) short circuit here, the result will be true so no need to move to --$call 

    $calls = 0;
    $f || ++$calls;
    var_dump($calls); //int(1)

    $calls = 1;
    $f || --$calls;
    var_dump($calls); //int(0)


    $x = $t and $f; //b
    $y = ($t and $f);
    $z = $f or $t;
    var_dump($x, $y, $z); //bool(true), bool(false), bool(false)

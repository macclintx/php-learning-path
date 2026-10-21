<?php

    const LINE1 = "I opened the fridge for the fifth";
    const LINE2 = "hoping a delicious snack had magically";
    const LINE3 = "but all I found was half a";
    const LINE4 = "some old cheese, and my own reflection judging";

    $period = "time";
    $action = "appeared";
    $fruit = "lemon";
    $subject = "me";

    printf("%s %s %s %s %s %s %s %s ", LINE1, $period, LINE2, $action, LINE3, $fruit /*undefined variable*/, LINE4, $subject );


    /* 1. Delete the semicolon after the printf(...) line.
       2. Change $fruit to $frut in the printf call only.
       3. Use LINE5 in the printf call, which doesn’t exist.
       4. Misspell printf as prinft.

       //ERRORS
       1. PHP Parse error:  syntax error, unexpected end of file - did not run
       2. Warning: Undefined variable $frut - run but omitted the variable from sentence
       3. Fatal error: Uncaught Error: Undefined constant "LINE5" - did not run
       4. Fatal error: Uncaught Error: Call to undefined function prinft() - did not run
    */
<?php

    /* This script is a simple MadLibz game. The catch is in the trailing spaces at the
        end of each LINEn constant because %s in printf already supplies spacing. Also you need 8 %s
        and you ran into ArgumentCountError.
    */

    // declare constants for the static parts of the sentence since they won't change.   
    const LINE1 = "I opened the fridge for the fifth";
    const LINE2 = "hoping a delicious snack had magically";
    const LINE3 = "but all I found was half a";
    const LINE4 = "some old cheese, and my own reflection judging";

    // declare the blanks a player would fill in, hardcoded for now because there’s no input yet
    $period = "time";
    $action = "appeared";
    $fruit = "lemon";
    $subject = "me";

    // using printf is a preference.
    printf("%s %s %s %s %s %s %s %s.\n", LINE1, $period, LINE2, $action, LINE3, $fruit, LINE4, $subject);

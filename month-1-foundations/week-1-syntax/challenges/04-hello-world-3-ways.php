<?php
    
    $name = "William";
    $sales = 32332.7898;
    $daysIn = 25;
    $orders = 50400;

    //doesn't need complex format.
    echo "Welcome $name\n";

    //when i need a return value to be used in an expression.
    $value = print "Welcome $name\n";
    var_dump($value); //i could use return value which is 1 in an if statement.

    //when i need complex format where echo cannot alter decimal points or truncate values.
    printf("Welcome %s, your sales are %.2f in %05d days.\nTotal orders: %d\n", $name, $sales, $daysIn, $orders);

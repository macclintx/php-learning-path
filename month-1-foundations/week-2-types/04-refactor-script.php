<?php


/*
    Access gate script: evaluates inputs and determines approptiate action
    Assumes predetermined input(for testing) is a string and float
    Breaks if the stored hash and password attempt use == comparisonl, they will evaluate to numeric strings and password is accepted 

*/

$stored_hash = md5("QNKCDZO");
$password_attempt = "240610708";
$age_input = "18.7";
if((string)(int)$age_input === $age_input){
    die( "Age must be a whole number\n");
}else{
    $age_input = (int)$age_input;
}

$email = "admin@example.com";
$balance = 0.1 + 0.2;
$cart_total = 0.3;
$otp_expected = "000123";
$otp_attempt = "123";
$last_login_days = 0;
$price_input = "10.50";
$price_expected = "10.5";

if(!is_numeric($price_input)){
    die( "Price must be a number\n");
}else{
    $price_input = (float)$price_input;
}

if(!is_numeric($price_expected)){
    die( "Price must be a number\n");
}else{
    $price_expected = (float)$price_expected;
}

$debug_flag = "true";


//strict comparison prevents evaluating the hash as numeric strings
if (md5($password_attempt) === $stored_hash) {
    echo "1. Password accepted\n";
} else {
    echo "1. Password rejected\n";
}

//strict comparison prevents numeric string comparison 
if ($age_input === 18) {
    echo "2. Age check passed\n";
} else {
    echo "2. Age check failed\n";
}

//strict comparison prevents, in this case, 0 from evaluating as false
if (strpos($email, "admin") === false) {
    echo "3. Not an admin address\n";
} else {
    echo "3. Admin address\n";
}

//in this case, because floats are inexact we use an epsilon check
if (abs($balance - $cart_total) < 0.00001 ) {
    echo "4. Totals match\n";
} else {
    echo "4. Totals differ\n";
}

//strict comparison prevents numeric string evaluation
if ($otp_attempt === $otp_expected) {
    echo "5. Code accepted\n";
} else {
    echo "5. Code rejected\n";
}

//strict comparison prevents 0 login days from evaluating as null which is untrue because the user already has data of logging in which is 0 days ago, so user recently logged in
if ($last_login_days === null) {
    echo "6. Never logged in\n";
} else {
    echo "6. Has logged in before\n";
}

//we first normanlized the input otherwise it would not work
if ($price_input === $price_expected) {
    echo "7. Prices match\n";
} else {
    echo "7. Prices differ\n";
}

//strict comparison prevents the truthy string from being converted to a bool which is true hence debug mode always on
if ($debug_flag === "true") {
    echo "8. Debug mode on\n";
} else {
    echo "8. Debug mode off\n";
}



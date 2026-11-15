<?php

// Deliberately sloppy access gate. Every check below has something wrong with it
// Refactor == with === after running and understand difference and possible vulnerabilities

$stored_hash = md5("QNKCDZO");
$password_attempt = "240610708";

$email = "admin@example.com";

$balance = 0.1 + 0.2;
$cart_total = 0.3;

echo "\n";
printf("%.3f \n",$balance);
printf("%.3f \n",$cart_total);
echo "\n";
$otp_expected = "000123";
$otp_attempt = "123";

$last_login_days = 0;

$price_input = "10.50";
$price_expected = "10.5";

$debug_flag = "false";


if (md5($password_attempt) == $stored_hash) {
    echo "1. Password accepted\n";
} else {
    echo "1. Password rejected\n";
}


if ($age_input == 18) {
    echo "2. Age check passed\n";
} else {
    echo "2. Age check failed\n";
}


if (strpos($email, "admin") == false) {
    echo "3. Not an admin address\n";
} else {
    echo "3. Admin address\n";
}


if ($balance == $cart_total) {
    echo "4. Totals match\n";
} else {
    echo "4. Totals differ\n";
}


if ($otp_attempt == $otp_expected) {
    echo "5. Code accepted\n";
} else {
    echo "5. Code rejected\n";
}


if ($last_login_days == null) {
    echo "6. Never logged in\n";
} else {
    echo "6. Has logged in before\n";
}


if ($price_input == $price_expected) {
    echo "7. Prices match\n";
} else {
    echo "7. Prices differ\n";
}


if ($debug_flag == true) {
    echo "8. Debug mode on\n";
} else {
    echo "8. Debug mode off\n";
}



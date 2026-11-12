<?php
    define('USD_TO_KES_RATE', 130.00);
    define('GBP_TO_KES_RATE', 171.97);
    define('EUR_TO_KES_RATE', 143.65  );
    define('AUD_TO_KES_RATE', 88.43);


    echo "Currency Converter\n";

    $amount_in_kes = readline("\nEnter the amount in KES you want to convert: ");
    echo("Select the currency you want to convert to: \n");
    echo("1. USD\n2. GBP\n3. EUR\n4. AUD\n");
    $option = readline("Enter currenty option (1-4): ");

    if($option == 1){
        $converted_currency = $amount_in_kes / USD_TO_KES_RATE;
        printf('%.2f US Dollars', $converted_currency);
    }elseif($option == 2){
        $converted_currency = $amount_in_kes / GBP_TO_KES_RATE;
        printf("%.2f Pounds" , $converted_currency);
    }elseif($option == 3){
        $converted_currency = $amount_in_kes / EUR_TO_KES_RATE;
        printf("%.2f Euros", $converted_currency);
    }elseif($option == 4){
        $converted_currency = $amount_in_kes / AUD_TO_KES_RATE;
        printf("%.2f Australian Dollars", $converted_currency);
    }else{
        echo "Invalid option";
    }

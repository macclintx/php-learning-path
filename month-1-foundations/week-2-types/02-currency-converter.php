<?php
//static rates for now from https://wise.com/us/currency-converter/ on 2026/11/12
    const USD_TO_KES_RATE = 130.00;
    const GBP_TO_KES_RATE = 171.97;
    const EUR_TO_KES_RATE = 143.65;
    const AUD_TO_KES_RATE = 88.43;


    echo "Currency Converter\n";

    $amount_in_kes = readline("\nEnter the amount in KES you want to convert: ");
    if(!is_numeric($amount_in_kes)){
        die("Invalid amount! \n");
    }elseif($amount_in_kes < 1 ){ 
        die("Invalid amount! \n");
    }elseif($amount_in_kes > 1_000_000_000){ //protect against infinite results ie.(1e999 to INF) 
        die("Limit amount reached! \n");
    }
    else{
        $amount_in_kes = (float)$amount_in_kes;
    }
    

    echo("Select the currency you want to convert to: \n");
    echo("1. USD\n2. GBP\n3. EUR\n4. AUD\n");
    $option = readline("Enter currency option (1-4): ");

    if((string)(int)$option !== $option){
        die("Invalid option \n");
    }else{
        $option = (int)$option;
    }

    if($option === 1){
        $converted_currency = $amount_in_kes / USD_TO_KES_RATE;
        printf("%.2f US Dollars \n", $converted_currency);
    }elseif($option === 2){
        $converted_currency = $amount_in_kes / GBP_TO_KES_RATE;
        printf("%.2f Pounds \n" , $converted_currency);
    }elseif($option === 3){
        $converted_currency = $amount_in_kes / EUR_TO_KES_RATE;
        printf("%.2f Euros \n", $converted_currency);
    }elseif($option === 4){
        $converted_currency = $amount_in_kes / AUD_TO_KES_RATE;
        printf("%.2f Australian Dollars \n", $converted_currency);
    }else{
        echo "Invalid option \n";
    }

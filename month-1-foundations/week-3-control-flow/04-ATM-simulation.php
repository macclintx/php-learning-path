<?php

    /* 
        What it does: creates an ATM simulation
        What it assumes: the balance is KES 1000, and you can't deposit or withdraw an amount with cents. Also ATM has a withdrawal limit 
                          of 50 as the lowest amount to facilitate a transaction charge(not implemented in this). Least deposit amount is
                          50(no reason). Assumes option starting with zero as long its among available options is a valid option 
        What breaks: switch uses '==' comparison and its not strict, so it will accept and option starting with 0 (01,002, 0003)
                     as valid.
                     

    */
    $balance = 1000.00;

    do{
        
        echo "ATM Simulation\n1. Deposit\n2. Withdraw\n3. Check Balance\n4. Exit\n";
        $option = readline('Enter option: ');

        if( !ctype_digit($option)){
            $option = 0;
        }

        switch($option){
            case 1:
                $deposit_amount = readline("Enter Deposit amount: ");

                if(ctype_digit($deposit_amount) ){
                    if($deposit_amount > 1_000_000){
                        echo "You cannot deposit more than KES 1,000,000. Please visit your branch.\n";
                    }elseif($deposit_amount < 50){
                        echo "Your deposit amount cannot be less than KES 50.\n";
                    }else{
                        $balance += $deposit_amount;
                        printf("Your new balance: KES %.2f\n", $balance);
                    }
                }else{
                    echo "Invalid deposit amount!\n";
                }
            
                break;
            
            case 2:
                $withdraw_amount = readline("Enter withdraw amount: ");

                if(ctype_digit($withdraw_amount)){
                    if($withdraw_amount > $balance){
                        printf( "You do not have sufficient balance\nYour available balance: KES %.2f\n",  $balance);
                    }elseif($withdraw_amount < 50){
                        echo "Withdraw amount cannot be less than KES 50\n"; 
                    }else{
                        $balance -= $withdraw_amount;
                        printf("Your new balance: KES %.2f\n", $balance);
                    }
                }else{
                    echo "Invalid withdrawal amount!\n";
                }
                break;
            
            case 3:
                printf( "Your balance:%.2f KES\n", $balance);
                break;

            case 4:
                echo "Thank you for choosing ATM. :)\n";
                break;
            default:
                echo "\nInvalid option\n\n";
                break;
        }

    }while($option != 4 );
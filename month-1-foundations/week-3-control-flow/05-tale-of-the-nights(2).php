<?php
    $keep_going = true;
    
    for ($i = 1; $i <= 10; $i++) {
    echo "$i\n";
    if ($i === 4) {
        
        break;
        
    }
    echo "after\n";
    
}
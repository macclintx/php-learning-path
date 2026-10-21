<?php
    var_dump(null == 0);            // true
    var_dump("0" == null);          // false
    var_dump("" == null);           // true
    var_dump(0 == "");              // true
    var_dump("abc" == "ABC");       // false
    var_dump(" 1" == 1);            // true
    var_dump("1 " == 1);            // true
    var_dump("1abc" == 1);          // false
    var_dump("1e3" == "1000");      // true
    var_dump(0.1 + 0.2 == 0.3);     // false
    var_dump((bool)"0.0");          // true
    var_dump((bool)"false");        // true
    var_dump((int)"12abc");         // 12
    var_dump((int)-12.9);           // -12
    var_dump("5" . "5");            // "55
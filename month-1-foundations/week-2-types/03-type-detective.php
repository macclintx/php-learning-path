<?php
    $a = "42";
    var_dump( gettype($a) ); // string(6) "string"
    var_dump( is_numeric($a) ); // bool(true)
    var_dump( (bool)$a ); // bool(true)
    echo "\n\n";

    $b = 42;
    var_dump( gettype($b) ); // string(7) "integer"
    var_dump( is_numeric($b) ); // bool(true)
    var_dump( (bool)$b ); // bool(true)
    echo "\n\n";

    $c = 4.2;
    var_dump( gettype($c) ); // string(6) "double"
    var_dump( is_numeric($c) ); // bool(true)
    var_dump( (bool)$c ); // bool(true)
    echo "\n\n";

    $d = "4.2";
    var_dump( gettype($d) ); // string(6) "string"
    var_dump( is_numeric($d) ); // bool(true)
    var_dump( (bool)$d ); // bool(true)
    echo "\n\n";

    $e = true;
    var_dump( gettype($e) ); // string(7) "boolean"
    var_dump( is_numeric($e) ); // bool(false)
    var_dump( (bool)$e ); // bool(true)
    echo "\n\n";

    $f = null;
    var_dump( gettype($f) ); // string(4) "NULL"
    var_dump( is_numeric($f) ); // bool(false)
    var_dump( (bool)$f ); // bool(false)
    echo "\n\n";

    $g = "abc";
    var_dump( gettype($g) ); // string(6) "string"
    var_dump( is_numeric($g) ); // bool(false)
    var_dump( (bool)$g ); // bool(true)
    echo "\n\n";

    $h = "";
    var_dump( gettype($h) ); // string(6) "string"
    var_dump( is_numeric($h) ); // bool(false)
    var_dump( (bool)$h ); // bool(false)
    echo "\n\n";


   
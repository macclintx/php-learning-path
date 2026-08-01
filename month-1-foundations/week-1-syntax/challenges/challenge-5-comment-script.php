<?php

    $occupation = 'Doctor';

    //salary need cent precision for accuracy in calculations of deductions and formating
    $salary = 40000.1234;
    $hospital_branch = 'Kileleshwa';

    echo "He is a $occupation at $hospital_branch branch, earning KES $salary\n";

    print "The branch in $hospital_branch has a $occupation being paid KES $salary\n";

    //use for formatting decimal points
    printf('Its very wrong for a %s working at a hospital in %s be paid %.2f. Its just too low',$occupation,$hospital_branch,$salary);
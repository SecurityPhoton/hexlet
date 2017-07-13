<?php

namespace App\Factorial;

function factorial($num)
{
    // BEGIN (write your solution here)
    if ($num == 0) {return 1;}
    if ($num == 1) {return 1;}
    return $num*factorial($num-1);
    // END
}

echo factorial(5).PHP_EOL;

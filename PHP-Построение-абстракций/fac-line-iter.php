<?php

namespace App\Factorial;

function factorial($num)
{
    // BEGIN (write your solution here)
    $factorialIter = function ($num, $acc) use (&$factorialIter) {
       if ($num < 2)
       {
           return $acc;
       }
       return $factorialIter($num - 1, $acc * $num);
   };
   return $factorialIter($num, 1);
    // END
}

echo factorial(3);

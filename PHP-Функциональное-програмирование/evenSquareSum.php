<?php
//Реализуйте функцию evenSquareSum, которая принимает на вход массив и возвращает сумму квадратов четных чисел.
//[1, 2, 3, 8]; // 2^2 + 8^2 = 68


namespace App\Solution;

//require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\select;
use function Functional\map;

// BEGIN (write your solution here)
function evenSquareSum($arr)
{
  $res = array_filter($arr, function ($item){return (!($item & 1));});

  return array_sum(array_map(function ($item){return $item *$item;},$res));
}
// END
var_dump(evenSquareSum(array(1, 2, 3)));

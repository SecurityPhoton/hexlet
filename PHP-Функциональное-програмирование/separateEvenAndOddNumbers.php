<?php

namespace App\Solution;

use function Functional\partition;

/*
Реализуйте функцию separateEvenAndOddNumbers, которая принимает на вход массив чисел и возвращает массив,
 в котором первый элемент - это массив четных чисел, а второй элемент - это массив нечетных чисел,
 полученных из исходного массива.
partition - функция которая возвращает масив разделенный на 2 части.
*/
// BEGIN (write your solution here)
function separateEvenAndOddNumbers($array)
{

  return list($odd,$odd)= partition($array, function ($item){if ($item % 2 == 0) return true;} );

}
// END

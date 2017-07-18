<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;
use function Functional\partial_any;
use const Functional\…;

//Реализуйте функцию mapWithPower, которая принимает на вход массив и степень,
// и возвращает новый массив, в котором каждое значение возведено в переданную степень.

// BEGIN (write your solution here)
function mapWithPower($array, $power)
{
  $func = partial_any('pow', …, $power);

  return map($array, $func);
}

// partial_any - служит для объявления функции на потом, когда можно будет вставить аргумент которого пока нет.
// Символ  … указывает куда потом вставить недостающий аргумент.
// В примере мы сначала объявляем функцию (лямбда) с набором параметров. Затем возвращаем в map(масив, лямбда функция) результат. 
// END

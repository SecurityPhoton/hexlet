<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;

function powerOfString($str)
{
    // BEGIN (write your solution here)
    if ($str===null){return null;}

    return array_sum(array_map(function ($item) {return ord($item);},str_split($str)));
    // в качестве параметра callable функии в array_map передаем анонимную функцию
    // так как в функции можно передавать только анонимные (лямбда) функции.
    // END
}

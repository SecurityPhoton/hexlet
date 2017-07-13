<?php

namespace App\Factor;

function factor($multiplier) // как бы конструктор принимающий аргумент
{
    // BEGIN (write your solution here) функция внутри функции конструктора которую можна вызвать, передав в созданый екземпляр значение
    return function ($arg) use ($multiplier) {
        return $multiplier * $arg;
    };
    // END
}

$multiTwo = factor(2); // 2 - множитель
echo $multiTwo(2)."/n";

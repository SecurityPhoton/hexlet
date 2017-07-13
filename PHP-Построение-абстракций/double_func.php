<?php

namespace App\Double;

function double($func)
{
    // BEGIN (write your solution here)
    return function ($arg) use ($func)
    {
      return $func($func($arg));
    }
    // END
    ;
}

$inc = function ($arg) {
            return $arg + 1;
        };
$inc2 = double($inc);
echo $inc2(2);


/* Реализуйте функцию double, которая принимает как аргумент функцию с одним аргументом и возвращает функцию, которая применяет исходную функцию дважды.

Пример:

Исходная функция с одним аргументом:

2 == $increment(1); // функция увеличивает свой аргумент на единицу

double вернул новую функцию, которая применяет inc дважды:

$increment2 = double($increment);
3 == $increment2(1) // эквивалентно $increment($increment(1));

Тут мы применяем double дважды и в итоге increment выполняется 4 раза:

$increment4 = double(double($increment));
5 == $increment4(1);
*/

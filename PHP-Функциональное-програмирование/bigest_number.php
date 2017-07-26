<?php
/*
Реализуйте функцию arrangeBiggestNumber, которая составляет самое большое число
 из переданного массива чисел и возвращает его строковое представление.
 Например из чисел [3, 24, 4] мы можем составить такие:
 3244, 3424, 2434, 2443, 4324, 4243 и самое больше из них это 4324.

Пример:

998764543431 == arrangeBiggestNumber([1, 34, 3, 98, 9, 76, 45, 4]);
*/

function arrangeBiggestNumber($array)
{
  if ($array===null) return null;
    $temp_array = array();
    foreach ($array as $key => $value) {
      array_unshift($array, array_pop($array)); // извлекаем последний елемент списка и вставляем его в начало сдвинутого на 1-н елемент масива
      $temp_array[$key] = intval(str_replace(' ','',implode(" ",$array))); // заполняем масив склееными числами попутно удаляем пробелы
    }
    rsort($temp_array); // сортирует от большего к меньшему не сохраняя ключи масива
    var_dump($temp_array);
    return strval($temp_array[0]); // возвращаем строковое представление
};




var_dump(arrangeBiggestNumber([43, 44, 12, 324, 90, 9, 88, 89]));


function arrangeBiggestNumber1($numbers)
{
    if (empty($numbers)) {
        return;
    }

    usort($numbers, function ($prev, $next) {
        $number1 = (int) ($next . $prev);
        $number2 = (int) ($prev . $next);
        return bccomp($number1, $number2); // Сравнение двух чисел произвольной точности 
    });

    return implode('', $numbers);
}

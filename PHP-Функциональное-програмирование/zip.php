<?php
/* Реализуйте функцию bestAttempt которая принимает на вход результаты попыток и возвращает массив со списком имен футбольных клубов,
 которые победили в каждой из попыток. Если результатом попытки была ничья, то в результирующем массиве она не фигурирует
 (потому что никто не победил).

Пример:

$firstClubAttempts = [['name' => 'milan', 'scored' => 1], ['name' => 'milan', 'scored' => 0]];
$secondClubAttempts = [['name' => 'porto', 'scored' => 1], ['name' => 'porto', 'scored' => 1]];

['porto'] == bestAttempt($firstClubAttempts, $secondClubAttempts);

Подсказки:

// Returns ['one|1', 'two|2', 'three|3']
zip(
    ['one', 'two', 'three'],
    [1, 2, 3],
    function ($one, $two) {
        return $one . '|' . $two;
    }
);

    array_map сохраняет ключи. Чтобы их сбросить, используйте array_values
*/

use function Functional\map;
use function Functional\zip;

// BEGIN (write your solution here)
function bestAttempt($r,$r1)
{

//  var_dump (array_map(null, $r, $r1));
$f = zip($r,$r1,function ($a,$b)
{if ($a['scored'] == $b['scored']) {return null;}
elseif ($a['scored'] > $b['scored'])
{return $a['name'];}
else {return $b['name'];}} );
return array_values(array_filter($f));
    //  function($one, $two){  if ($a['scored'] == $b['scored']) {return null;} elseif ($a['scored'] > $b['scored']) {return $a['name'];} else {return $b['name'];}
}

$firstClubAttempts = [['name' => 'milan', 'scored' => 1], ['name' => 'milan', 'scored' => 0]];
$secondClubAttempts = [['name' => 'porto', 'scored' => 1], ['name' => 'porto', 'scored' => 1]];

bestAttempt($firstClubAttempts, $secondClubAttempts);

<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';
require_once 'User.php';

use function Functional\group;
use function Functional\flatten;
use function App\User\getAge;
/*
Реализуйте функцию ages, которая принимает на вход список пользователей и
возвращает массив, в котором пользователи одинакового возраста расположены рядом.
Порядок появления возрастов в массиве должен совпадать с порядком появления в исходном массиве.

Пример:

$u1 = User\make(4);
$u2 = User\make(3);
$u3 = User\make(5);
$u4 = User\make(4);
$u5 = User\make(5);

[$u1, $u4, $u2, $u3, $u5] == ages([$u1, $u2, $u3, $u4, $u5]),

Подсказки

    Получить возраст пользователя - getAge($user).
    Функция flatten - разворачивает многомерный массив в одномерный.

*/
// BEGIN (write your solution here)
function ages($list_of_users)
{
  return flatten(group($list_of_users, function ($user) {return getAge($user);} ));

}
// END

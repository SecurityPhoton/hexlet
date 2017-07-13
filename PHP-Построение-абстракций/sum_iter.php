<?php

namespace App\Sum;

// Цель: Научиться передавать анонимные функции как аргументы других функций.

function sum($start, $finish, $func)
{
  $iter = function ($curent, $acc) use ($start, $finish, &$iter)
  {
    if ($curent>$finish) return $acc;
    return $iter($curent+1,$acc+func($current));
  };

  return $iter($start,0);
}

// echo sum(3,5,function it ($num) {return $num;});

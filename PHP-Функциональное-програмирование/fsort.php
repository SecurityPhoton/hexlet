<?php

namespace App\Solution;

//require getenv('COMPOSER_HOME') . '/vendor/autoload.php';
///
//    Сортируем по количеству единиц в бинарном представлении (порядок следования не важен).
//    Если количество единиц одинаково, то сортируем на основе десятичного представления.
///
///
///

function sortByBinary($colection)
{
return  fsort($colection, function($left, $right) {
   echo "-=".decbin($left)."\n";
   echo "-=".decbin($right)."\n";
  $l = array_sum(str_split(decbin($left)));
  $r = array_sum(str_split(decbin($right)));
  echo $l."\n";
  echo $r."\n";
if ($l > $r){return 1;}
elseif ($l < $r){return -1;}
elseif ($l == $r)
  { if ($left>$right){return 1;}
  elseif ($left < $right){return -1;}
  else
    return 0;}

  });
}

//array
var_dump(sortByBinary(array(3, 4, 2, 1)));
// END

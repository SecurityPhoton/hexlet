<?php

namespace Shop;

// BEGIN (write your solution here)
/**
 * Реализуйте следующие функции:
    addToCart, которая добавляет в корзину товар, переданный в качестве второго аргумента
    getCount, которая возвращает количество товаров, помещенных в корзину
    getTotal, которая возвращает суммарную стоимость товаров, помещенных в корзину

Пример:
 */
class Cart
{
  public $items = array(null);

}

function addToCart(Cart $cart, Item $item)
{
  // BEGIN (write your solution here)
  array_push($cart->items, $item);
  // END
}

function getCount(Cart $cart)
{
  // BEGIN (write your solution here)
  return count($cart->items);
  // END
}

function getTotal(Cart $cart)
{
  // BEGIN (write your solution here)
   return array_reduce($cart->items, function ($sum, $item) {
    return $sum + $item->price;
  }, 0);
  // END
}
// END

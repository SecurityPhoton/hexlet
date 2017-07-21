<?php

namespace Shop;

/*
src/Shop/Cart.php

Реализуйте в классе Shop\Cart следующие методы:

    add - для добавления товаров в корзину
    count - для получения количества товаров в корзине
    total - для получения общей суммы товаров в корзине
    remove - для удаления товара из корзины по id
    clear - для очистки корзины

Пример:

use Shop\Cart;

$cart = new Cart();

$cart->add(new Item(1, "milk", 5))
$cart->add(new Item(2, "water", 2));

$cart->count(); // 2
$cart->total(); // 7

$cart->remove(2);

$cart->count(); // 1
$cart->total(); // 5

$cart->clear();

$cart->count(); // 0
$cart->total(); // 0


*/
class Cart
{
  private $items = [];

  // BEGIN (write your solution here)
    public function add($item)
  {
      array_push($this->items, $item);
    }

  

  public function total()
  {
    $sum=0;
    foreach ($this->items as $key => $value)
    {
        $sum = $sum + $value->price;
    }
    return $sum;

  }

  public function remove($value)
  {
   if (array_key_exists($value,$this->items)) {
    unset($this->items[$value]);}
  }

  public function clear()
  {
    $this->items=array();
  }
  // END
}

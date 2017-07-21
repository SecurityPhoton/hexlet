<?php

namespace Shop;

class Cart implements \Countable, \IteratorAggregate
{
    private $items = [];

    public function add(Item $item)
    {
        $this->items = array_merge($this->items, [ $item ]);
    }

    // BEGIN (write your solution here)

    // END

    public function total()
    {
        return array_reduce($this->items, function ($sum, $item) {
            return $sum + $item->price;
        }, 0);
    }

    public function remove($id)
    {
        $this->items = array_filter($this->items, function (Item $item) use ($id) {
            return $id !== $item->id;
        });
    }

    public function clear()
    {
        $this->items = [];
    }

    public function count()
    {
      return count($this->items);
    }

    public function getIterator()
      {
          return new \ArrayIterator($this->items);
      }
      
}

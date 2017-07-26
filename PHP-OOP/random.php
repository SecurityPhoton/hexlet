<?php

namespace App;

require_once 'RandomInterface.php';

class Random implements RandomInterface
{
    private $init;
    private $next;
    const RAND_MAX = 32767;
    // BEGIN (write your solution here)
    public function __construct($seed)
    {
        $this->init = $seed;
        $this->next = $seed;
    }


    public function getNext()
    {
      $this->next = $this->next * 1103515245 + 12345;
      return ($this->next/65536) % self::RAND_MAX;
    }


    public function reset()
    {
        $this->next = $this->init;
        return 0;
    }
    // END
}

<?php

namespace App;

require_once "DynamicPropsUndefinedProp.php";

// BEGIN (write your solution here)
class DynamicProps
{
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function __set($name, $value)
    {
        if (!array_key_exists($name, $this->data)) {
            throw new DynamicPropsUndefinedProp("{$name} is undefined");
        }

        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (!array_key_exists($name, $this->data)) {
            throw new DynamicPropsUndefinedProp("{$name} is undefined");
        }

        return $this->data[$name];
    }

    public function __isset($name)
    {
        return array_key_exists($name, $this->data);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}
// END

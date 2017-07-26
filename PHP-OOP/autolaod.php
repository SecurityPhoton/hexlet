<?php

namespace App;

// BEGIN (write your solution here)
spl_autoload_register(function ($class) {
    $path = dirname(__FILE__). "/" . str_replace("\\", "/", $class) . '.php';
    require_once $path;
});
// END

class Test extends \PHPUnit_Framework_TestCase
{
   public function testClasses()
    {
        //$router = new \Framework\Router();
        //$this->assertInstanceOf('Framework\Router', $router);

        //$controller = new \Framework\Controller\Base();
        //$this->assertInstanceOf('Framework\Controller\Base', $controller);
    }
}

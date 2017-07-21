<?php

//Реализуйте абстрактный класс Mailer согласно интерфейсу MailerInterface.
//Реализуйте в нем методы setVar (для сохранения пары "ключ-значение") и getAllVars (для получения массива всех сохраненных пар).

namespace App;

// BEGIN (write your solution here)
abstract class Mailer implements MailerInterface
{
        public $pairs = array();

        public function setVar($key, $value)
        {
            $this->pairs[$key]=$value;
        }

        public function getAllVars()
        {
            return $this->pairs;
        }
}
// END

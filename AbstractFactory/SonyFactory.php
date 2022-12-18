<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;
use phpstormprojects\phpro\AbstractFactory\AbstractInterface;
use phpstormprojects\phpro\AbstractFactory\LCD;
use phpstormprojects\phpro\AbstractFactory\LED;

class SonyFactory implements AbstractInterface{
    public function createLCD(): LCD
    {
        return new LCDSONY();
    }

    public function createLED(): LED
    {
        return new LEDSONY();
    }
}


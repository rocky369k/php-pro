<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

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

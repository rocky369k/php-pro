<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

class LGFactory implements AbstractInterface{
    public function createLCD(): LCD
    {
        return new LCDLG();
    }

    public function createLED(): LED
    {
        return new LEDLG();
    }
}

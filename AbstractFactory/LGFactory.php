<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;
use phpstormprojects\phpro\AbstractFactory\AbstractInterface;
use phpstormprojects\phpro\AbstractFactory\LCD;
use phpstormprojects\phpro\AbstractFactory\LED;

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

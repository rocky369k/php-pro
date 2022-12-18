<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

interface AbstractInterface{
    public function createLED(): LED;
    public function createLCD(): LCD;
};

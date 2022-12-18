<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;
use phpstormprojects\phpro\AbstractFactory\LED;

class LEDSONY implements LED
{
    public function paint(): string
    {
        return '📺: LED SONY';
    }
}
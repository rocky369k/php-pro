<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

class LEDSONY implements LED
{
    public function paint(): string
    {
        return '📺: LED SONY';
    }
}
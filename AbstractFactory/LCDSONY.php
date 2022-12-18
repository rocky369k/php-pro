<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

class LCDSONY implements LCD
{
    public function paint(): string
    {
        return '📺: LCD SONY';
    }
}
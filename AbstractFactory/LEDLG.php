<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

class LEDLG implements LED
{
    public function paint(): string
    {
        return '📺: LED LG';
    }
}
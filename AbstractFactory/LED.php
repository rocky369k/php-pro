<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

interface LED{
    public function paint(): string;
}
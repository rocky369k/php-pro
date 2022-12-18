<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;
use phpstormprojects\phpro\AbstractFactory\LCD;

class LCDLG implements LCD
{
   public function paint(): string
   {
       return '📺: LCD LG';
   }
}

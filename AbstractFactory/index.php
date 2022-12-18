<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\AbstractFactory;

require_once '../vendor/autoload.php';

function clientCode(AbstractInterface $factory)
{
    print "\n";
    print $factory->createLCD()->paint();
    print $factory->createLED()->paint();
    print "\n";

}

print "Your TV: \n";
$LGFactory = new LGFactory();
clientCode($LGFactory);

print "Your TV: \n";
$SonyFactory = new SonyFactory();
clientCode($SonyFactory);

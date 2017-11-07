<?php

require_once 'vendor/autoload.php';

use App\SimpleFactory\DoorFactory;

#Exemplo Simple Factory
$door = DoorFactory::makeDoor(100,200);
echo "Width: ". $door->getWidth();
echo "\n";
echo "Height: ". $door->getHeight();
echo "\n";
#####
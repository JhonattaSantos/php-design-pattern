<?php
require_once 'vendor/autoload.php';

use App\Creational\Builder\Director;
use App\Creational\Builder\ConcreteBuilder1;

$director = new Director;
$builder = new ConcreteBuilder1;
$director->setBuilder($builder);

echo "Standard basic product:\n";
$director->buildMinimalViableProduct();
$builder->getProduct()->listParts();

echo "Standard full featured product:\n";
$director->buildFullFeaturedProduct();
$builder->getProduct()->listParts();

// Remember, the Builder pattern can be used without a Director class.
echo "Custom product:\n";
$builder->producePartA();
$builder->producePartC();
$builder->getProduct()->listParts();

<?php
require_once 'vendor/autoload.php';

use App\MyFactory\MyFactory;


$myFactory = new MyFactory;
$sp = $myFactory->create('sp');
$rj = $myFactory->create('RJ');

var_dump($sp->capital());
var_dump($rj->capital());
#var_dump($myFactory->create('PE'));

<?php
require_once 'vendor/autoload.php';

use App\MyFactory\MyFactory;


$myFactory = new MyFactory;
$sp = $myFactory->create('SP');
$rj = $myFactory->create('Rj');

var_dump($sp->capital());
var_dump($rj->capital());
var_dump($myFactory->create('PE')->capital());

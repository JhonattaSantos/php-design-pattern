<?php
require_once 'vendor/autoload.php';

use App\MyFactory\MyFactory;


$myFactory = new MyFactory;
var_dump($myFactory->create('sp'));
var_dump($myFactory->create('RJ'));
var_dump($myFactory->create('PE'));

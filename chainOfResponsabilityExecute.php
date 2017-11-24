<?php

require_once 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

use App\Behavioral\ChainOfResponsability\Bank;
use App\Behavioral\ChainOfResponsability\Bitcoin;
use App\Behavioral\ChainOfResponsability\Paypal;

$bank = new Bank(100);
$paypal = new Paypal(200);
$bitcoin = new Bitcoin(300);

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

$bank->pay(250);
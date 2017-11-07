<?php

require_once 'vendor/autoload.php';

use App\FactoryMethod\DevelopmentManager;
use App\FactoryMethod\MarketingManager;

$devManager = new DevelopmentManager;
$devManager->takeInterviewer();

$marketingManager = new MarketingManager;
$marketingManager->takeInterviewer();
<?php
require_once 'vendor/autoload.php';

use App\Behavioral\Observer\PurchaseOrderResponseSubject;
use App\Behavioral\Observer\UpdateItemQuotationObserver;
use App\Behavioral\Observer\SendEmailToBuyerObserver;
use App\Behavioral\Observer\UpdateStateQuotationObserver;

$purchaseOrder = [
    'buyer' => [
        'name' => 'Joaquim José',
        'email' => 'joaquim.jose@email.com',
        'fone' => '83 988552233'
    ],
    'items' => [
        [
            'sequence' => 1,
            'price' => 97.80,
            'quantity' => 5,
            'state' => 'not_accepted'
        ],
        [
            'sequence' => 2,
            'price' => 68.74,
            'quantity' => 10,
            'state' => 'not_accepted'
        ],
        [
            'sequence' => 3,
            'price' => 75,
            'quantity' => 6,
            'state' => 'not_accepted'
        ]
    ]
];

$subject = new PurchaseOrderResponseSubject($purchaseOrder);
$o1 = new UpdateItemQuotationObserver($purchaseOrder);
$o2 = new SendEmailToBuyerObserver($purchaseOrder);
$o3 = new UpdateStateQuotationObserver($purchaseOrder);
$subject->attach($o1)
        ->attach($o2)
        ->attach($o3)
        ->notify();



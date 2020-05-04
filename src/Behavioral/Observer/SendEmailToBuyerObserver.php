<?php

namespace App\Behavioral\Observer;
use SplObserver;
use SplSubject;

class SendEmailToBuyerObserver implements SplObserver
{

    private $purchaseOrder;

    public function __construct(array $purchaseOrder)
    {
        $this->purchaseOrder = $purchaseOrder;
    }

    public function update(SplSubject $subject)
    {
        
        echo "Notify Sr. {$this->purchaseOrder['buyer']['name']} by email {$this->purchaseOrder['buyer']['email']}".PHP_EOL;
    }

}

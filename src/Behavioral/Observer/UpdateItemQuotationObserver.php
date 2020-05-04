<?php

namespace App\Behavioral\Observer;
use SplObserver;
use SplSubject;

class UpdateItemQuotationObserver implements SplObserver
{

    private $purchaseOrder;

    public function __construct(array $purchaseOrder)
    {
        $this->purchaseOrder = $purchaseOrder;
    }

    public function update(SplSubject $subject)
    {
        //bad smell
        foreach($this->purchaseOrder['items'] as $item){
            if($item['state'] == 'accepted'){
                echo "Item {$item['sequence']} concluded".PHP_EOL; 
            }else if($item['state'] == 'not_accepted')
            {
                echo "Item {$item['sequence']} returned for cotation".PHP_EOL; 
            }
        }

        
    }

}
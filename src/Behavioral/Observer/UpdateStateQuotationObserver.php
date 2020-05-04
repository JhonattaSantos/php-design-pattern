<?php

namespace App\Behavioral\Observer;
use SplObserver;
use SplSubject;

class UpdateStateQuotationObserver implements SplObserver
{

    private $purchaseOrder;

    public function __construct(array $purchaseOrder)
    {
        $this->purchaseOrder = $purchaseOrder;
    }

    public function update(SplSubject $subject)
    {
         //bad smell
        $totallyAccepted = 0; 
        $totalNotAccepted = 0;

        $totalItens = count($this->purchaseOrder['items']);
       
        foreach($this->purchaseOrder['items'] as $item){
            if($item['state'] === 'accepted'){
                $totallyAccepted++;
            }else{
                $totalNotAccepted++;
            }
        }

        if($totallyAccepted == $totalItens){
            echo "The purcharse Order was totally accepted".PHP_EOL;
            return;
        }

        if($totalNotAccepted == $totalItens){
            echo "The purcharse Order it was not accepted".PHP_EOL;
            return;
        }

        echo "The purcharse Order was partially accepted".PHP_EOL;
        return;        
    }

}
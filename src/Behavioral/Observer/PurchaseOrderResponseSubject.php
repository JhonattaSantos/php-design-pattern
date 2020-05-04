<?php

namespace App\Behavioral\Observer;
use SplSubject;
use SplObserver;
use SplObjectStorage;

class PurchaseOrderResponseSubject implements SplSubject
{
    private $observers;
    private $response;

    public function __construct(array $response)
    {
        $this->observers = new SplObjectStorage;
        $this->response = $response;
    }

    public function attach(SplObserver $observer) : PurchaseOrderResponseSubject
    {
        $this->observers->attach($observer);
        return $this;
    }

    public function detach(SplObserver $observer) : void
    {
        $this->observers->detach($observer);
    }

    public function notify() : void
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getResponse()
    {
        return $this->response;
    }


}
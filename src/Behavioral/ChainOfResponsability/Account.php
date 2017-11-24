<?php

namespace App\Behavioral\ChainOfResponsability;

abstract class Account
{
	protected $successor;
	protected $balance;

	public function setNext(Account $account)
	{
		$this->successor = $account;
	}

	public function pay(float $amountToPay)
	{		
		if($this->canPay($amountToPay)){
			echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class());
			return;
		}

		echo sprintf('Cannot pay using %s. Proceeding ..' .PHP_EOL, get_called_class());
		if($this->successor){			
			$this->successor->pay($amountToPay);
		}

		if(!$this->successor){
			echo "Pay using other Bank";
		}
		
	}

	public function canPay($amount): bool
	{
		return $this->balance >= $amount;
	}
}
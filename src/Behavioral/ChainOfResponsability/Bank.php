<?php

namespace App\Behavioral\ChainOfResponsability;
use App\Behavioral\ChainOfResponsability\Account;

class Bank extends Account
{
	protected $balance;

	public function __construct(float $balance)
	{
		$this->balance = $balance;
	}
}
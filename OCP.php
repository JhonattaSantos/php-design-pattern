<?php

interface BonusSalarialInterface
{
	public function calcular();
}

class BonusSalariaSenior implements BonusSalarialInterface
{
	private $salario;

	public function __construct($salario)
	{
		$this->salario = $salario;
	}

	public function calcular()
	{
		return $this->salario * 0.20;
	}
}

class BonusSalariaPleno implements BonusSalarialInterface
{
	private $salario;

	public function __construct($salario)
	{
		$this->salario = $salario;
	}

	public function calcular()
	{
		return $this->salario * 0.10;
	}
}

class CalculadoraDeBonusSalarial
{
	private $bonusSalarial;

	public function __construct(
		BonusSalarialInterface $bonusSalarial)
	{
		$this->bonusSalarial = $bonusSalarial;
	}

	public function calcular()
	{
		return $this->bonusSalarial->calcular();
	}
}

$calculadoraSenior = new CalculadoraDeBonusSalarial(new BonusSalariaSenior(1000));
$calculadoraPleno = new CalculadoraDeBonusSalarial(new BonusSalariaPleno(1000));
echo $calculadoraSenior->calcular().PHP_EOL;
echo $calculadoraPleno->calcular().PHP_EOL;

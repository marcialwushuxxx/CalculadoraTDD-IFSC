<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Calculadora\Calculadora;

class CalculadoraTest extends TestCase
{
	public function testSimpleSum()
	{
		$a = 1;
		$b = 2;
		
		$this->assertEquals(3, $this->calculadora->sum($a,$b));
	}
	public function testSimpleSubtraction()
	{
		$a = 2;
		$b = 1;
		$this->assertEquals(1,$this->calculadora->subtract($a,$b));
	}
}
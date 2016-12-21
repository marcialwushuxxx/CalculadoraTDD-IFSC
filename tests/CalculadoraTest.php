<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Calculadora\Calculadora;
use Calculadora\MyNumber;
use Calculadora\MyMoney;

class CalculadoraTest extends TestCase
{
	public function setUp(){
		$this->calculadora = new Calculadora();
	}
	public function testSimpleSum()
	{
		$a = new MyNumber(1);
		$b = new MyNumber(2);
		$this->assertEquals(3, $this->calculadora->sum($a,$b));
	}
	public function testSumMoney(){
		$a = new MyMoney(1,'R$');
		$b = new MyMoney(2,'R$');
		$this->assertEquals(3, $this->calculadora->sum($a,$b));
	}
	public function testSimpleSubtraction()
	{
		$a = new MyNumber(2);
		$b = new MyNumber(1);
		$this->assertEquals(1,$this->calculadora->subtract($a,$b));
	}
	public function tearDown(){
		$this->calculadora = null;
	}
}
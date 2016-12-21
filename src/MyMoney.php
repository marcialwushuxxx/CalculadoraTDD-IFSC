<?php

namespace Calculadora;
use Calculadora\ICountable;

class MyMoney implements ICountable{
	Public $value, $cifrao;

	public function __construct(Float $value, String $cifrao = 'R$'){
		$this->setValue($value);
		$this->setCifrao($cifrao);
	}
	public function setCifrao(String $cifrao){
		$this->cifrao = $cifrao;
	}
	public function getValue(): Float{
		return $this->value;
	}
	public function setValue(Float $value){
		$this->value = $value;
	}
}
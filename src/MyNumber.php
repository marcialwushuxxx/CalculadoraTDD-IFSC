<?php

namespace Calculadora;
use Calculadora\ICountable;

class MyNumber implements ICountable{
	Public $value;

	public function __construct(Float $value){
		$this->setValue($value);
	}
	public function getValue(): Float{
		return $this->value;
	}
	public function setValue(Float $value){
		$this->value = $value;
	}
}
<?php

namespace Calculadora;

class Calculadora{
	public function sum(ICountable $arg1,ICountable $arg2): Float{
		return $arg1->value+$arg2->value;
	}
	public function subtract(ICountable $arg1,ICountable $arg2): Float{
		return $arg1->value-$arg2->value;
	}
}
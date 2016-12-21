<?php

namespace Calculadora;

class Calculadora{
	public function sum(MyNumber $arg1,MyNumber $arg2): MyNumber{
		return new MyNumber($arg1->value+$arg2->value);
	}
	public function subtract(MyNumber $arg1,MyNumber $arg2): MyNumber{
		return new MyNumber($arg1->value-$arg2->value);
	}
}
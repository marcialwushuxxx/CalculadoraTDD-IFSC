<?php

namespace Calculadora;

interface ICountable{
	public function getValue():Float;
	public function setValue(Float $value);
}
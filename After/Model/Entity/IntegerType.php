<?php

namespace After\Model\Entity;


class IntegerType implements IValue
{

	/**
	 * @var int
	 */
	private $value;


	public function __construct(int $value)
	{
		$this->value = $value;
	}


	public function value() : int
	{
		return $this->value;
	}


	public function length() : int
	{
		return strlen($this->value);
	}


	public function __toString() : string
	{
		return (string) $this->value;
	}
}
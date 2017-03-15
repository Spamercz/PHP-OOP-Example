<?php

namespace After\Model\Entity;


class StringType implements IValue
{

	/**
	 * @var string
	 */
	private $value;


	public function __construct(string $value)
	{
		$this->value = $value;
	}


	public function value() : string
	{
		return $this->value;
	}


	public function length() : int
	{
		return strlen($this->value);
	}


	public function __toString() : string
	{
		return $this->value;
	}
}
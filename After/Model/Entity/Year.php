<?php

namespace After\Model\Entity;

class Year implements IValue
{

	/**
	 * @var IntegerType
	 */
	private $value;


	public function __construct(
		\After\Model\Entity\IntegerType $integer
	)
	{
		if ($integer->value() < 1800) {
			throw new \After\Model\Exception\OutOfRange();
		}
		if ($integer->value() > 2100) {
			throw new \After\Model\Exception\OutOfRange();
		}

		$this->value = $integer;
	}


	public function value() : IntegerType
	{
		return $this->value;
	}


	public function __toString()
	{
		return $this->value()->__toString();
	}
}
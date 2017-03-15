<?php

namespace After\Model\Entity\Person;


class Id implements \After\Model\Entity\IValue
{

	/**
	 * @var \After\Model\Entity\IntegerType
	 */
	private $value;


	public function __construct(
		\After\Model\Entity\IntegerType $integerType
	)
	{
		if ($integerType->value() > 9999999) {
			throw new \After\Model\Exception\OutOfRange();
		}
		if ($integerType->value() < 1) {
			throw new \After\Model\Exception\OutOfRange();
		}

		$this->value = $integerType;
	}


	public function value() : \After\Model\Entity\IntegerType
	{
		return $this->value;
	}


	public function __toString()
	{
		return $this->value()->__toString();
	}
}
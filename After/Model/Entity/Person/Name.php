<?php

namespace After\Model\Entity\Person;


class Name implements \After\Model\Entity\IValue
{
	/**
	 * @var \After\Model\Entity\StringType
	 */
	private $value;


	public function __construct(
		\After\Model\Entity\StringType $string
	)
	{
		if ($string->length() > 60) {
			throw new \After\Model\Exception\OutOfRange();
		}
		if ($string->length() < 2) {
			throw new \After\Model\Exception\OutOfRange();
		}

		$this->value = $string;
	}


	public function value() : \After\Model\Entity\StringType
	{
		return $this->value;
	}


	public function __toString()
	{
		return $this->value()->__toString();
	}
}
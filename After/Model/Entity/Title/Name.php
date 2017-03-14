<?php

namespace After\Model\Entity\Title;


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
		if (strlen($string->value()) > 255) {
			throw new \After\Model\Exception\OutOfRange();
		}
		if (strlen($string->value()) < 2) {
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
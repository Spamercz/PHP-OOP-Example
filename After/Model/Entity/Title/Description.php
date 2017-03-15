<?php

namespace After\Model\Entity\Title;


class Description implements \After\Model\Entity\IValue
{

	/**
	 * @var \After\Model\Entity\StringType
	 */
	private $value;


	public function __construct(\After\Model\Entity\StringType $value)
	{
		$this->value = $value;
	}


	public function value()
	{
		return $this->value;
	}


	public function __toString() : string
	{
		return $this->value->__toString();
	}
}
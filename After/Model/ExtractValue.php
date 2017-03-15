<?php

namespace After\Model;


class ExtractValue
{
	/**
	 * @var IntegerValue
	 */
	private $integerValue;

	/**
	 * @var StringValue
	 */
	private $stringValue;


	public function __construct(
		IntegerValue $integerValue
		, StringValue $stringValue
	)
	{
		$this->integerValue = $integerValue;
		$this->stringValue = $stringValue;
	}


	public function extract(\After\Model\Entity\IValue $value)
	{
		if ($value instanceof \After\Model\Entity\IntegerType) {
			return $this->integerValue->decorate($value);

		} elseif ($value instanceof \After\Model\Entity\StringType) {
			return $this->stringValue->decorate($value);

		} elseif ($value->value() instanceof \After\Model\Entity\IValue) {
			return $this->extract($value->value());

		} else {
			throw new \After\Model\Exception\NotImplemented();
		}
	}
}
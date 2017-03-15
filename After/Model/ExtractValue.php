<?php

namespace After\Model;


class ExtractValue
{
	public function extract(\After\Model\Entity\IValue $value)
	{
		if ($value instanceof \After\Model\Entity\IntegerType) {
			$integerExtractor = new \After\Model\Extract\IntegerValue();
			return $integerExtractor->decorate($value);

		} elseif ($value instanceof \After\Model\Entity\StringType) {
			$stringExtractor = new \After\Model\Extract\StringValue();
			return $stringExtractor->decorate($value);

		} elseif ($value->value() instanceof \After\Model\Entity\IValue) {
			return $this->extract($value->value());

		} else {
			throw new \After\Model\Exception\NotImplemented();
		}
	}
}
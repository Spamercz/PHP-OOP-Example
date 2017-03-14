<?php

namespace After\Model;


class ValueToArray
{

	public function decorate(\After\Model\Entity\IValue $value) : string
	{
		if ($value->value() instanceof \After\Model\Entity\IValue) {
			return $this->decorate($value->value());

		} else {
			return $value->value();
		}
	}
}
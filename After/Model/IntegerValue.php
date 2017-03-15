<?php

namespace After\Model;


class IntegerValue
{

	public function decorate(\After\Model\Entity\IntegerType $value) : int
	{
		return $value->value();
	}
}
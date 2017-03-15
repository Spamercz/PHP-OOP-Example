<?php

namespace After\Model\Extract;


class IntegerValue
{

	public function decorate(\After\Model\Entity\IntegerType $value) : int
	{
		return $value->value();
	}
}
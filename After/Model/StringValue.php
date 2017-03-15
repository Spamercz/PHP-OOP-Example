<?php

namespace After\Model;


class StringValue
{

	public function decorate(\After\Model\Entity\StringType $value) : string
	{
		return $value->value();
	}
}
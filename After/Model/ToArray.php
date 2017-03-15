<?php

namespace After\Model;


class ToArray
{
	public function decorate(\After\Model\Entity\IEntity $entity) : array
	{
		$toArray = new EntityToArray();

		return $toArray->decorate($entity);
	}
}

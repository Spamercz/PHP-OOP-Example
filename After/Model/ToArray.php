<?php

namespace After\Model;


class ToArray
{

	/**
	 * @var \After\Model\EntityToArray
	 */
	private $entityToArray;


	public function __construct(
		EntityToArray $entityToArray
	)
	{
		$this->entityToArray = $entityToArray;
	}


	public function decorate(\After\Model\Entity\IEntity $entity) : array
	{
		return $this->entityToArray->decorate($entity);
	}
}

<?php

namespace After\Model;

class EntityToArray
{

	/**
	 * @var ExtractValue
	 */
	private $valueToArray;


	public function __construct(
		ExtractValue $valueToArray
	)
	{
		$this->valueToArray = $valueToArray;
	}


	public function decorate(\After\Model\Entity\IEntity $entity) : array
	{
		$array = [];

		foreach ($entity->entityVariables() as $name => $value) {
			if ($value instanceof \After\Model\Entity\IValue) {
				$array[$name] = $this->valueToArray->extract($value);

			} elseif ($value instanceof \After\Model\Entity\IEntity) {
				$array[$name] = $this->decorate($value->entityVariables());

			} else {
				throw new \After\Model\Exception\NotImplemented();
			}
		}

		return $array;
	}
}
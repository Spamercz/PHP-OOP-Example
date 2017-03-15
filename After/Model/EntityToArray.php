<?php

namespace After\Model;

class EntityToArray
{
	public function decorate(\After\Model\Entity\IEntity $entity) : array
	{
		$array = [];

		foreach ($entity->entityVariables() as $name => $value) {
			if ($value instanceof \After\Model\Entity\IValue) {
				$toArray = new ExtractValue();
				$array[$name] = $toArray->extract($value);

			} elseif ($value instanceof \After\Model\Entity\IEntity) {
				$array[$name] = $this->decorate($value);

			} elseif ($value instanceof \After\Model\Collection\ICollection) {
				$collectionToArray = new CollectionToArray($value);
				$array[$name] = $collectionToArray->decorate();

			} else {
				throw new \After\Model\Exception\NotImplemented();
			}
		}

		return $array;
	}
}
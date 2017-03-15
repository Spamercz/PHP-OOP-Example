<?php

namespace After\Model;

class CollectionToArray
{

	/**
	 * @var \After\Model\Collection\ICollection
	 */
	private $collection;


	public function __construct(\After\Model\Collection\ICollection $collection)
	{
		$this->collection = $collection;
	}


	public function decorate() : array
	{
		foreach ($this->collection->items() as $key => $item) {
			if ($item instanceof \After\Model\Entity\IEntity) {
				return [$key => (new ToArray())->decorate($item)];

			} elseif ($item instanceof \After\Model\Collection\ICollection) {
				return (new CollectionToArray($item))->decorate();

			} else {
				throw new \After\Model\Exception\NotImplemented();
			}
		}

		return [];
	}
}
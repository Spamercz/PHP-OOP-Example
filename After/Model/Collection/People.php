<?php

namespace After\Model\Collection;


class People implements ICollection
{
	/**
	 * @var array
	 */
	private $items;


	public function __construct(array $items)
	{
		$this->items = $items;
	}


	public function items() : array
	{
		return $this->items;
	}


	public function add(\After\Model\Entity\Person $person)
	{
		$this->items[$person->id()->__toString()] = $person;
	}
}
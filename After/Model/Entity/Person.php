<?php

namespace After\Model\Entity;


class Person implements IEntity
{

	/**
	 * @var \After\Model\Entity\Person\Id
	 */
	private $id;

	/**
	 * @var \After\Model\Entity\Person\Name
	 */
	private $name;

	/**
	 * @var \After\Model\Entity\Person\Character
	 */
	private $character;


	public function __construct(
		\After\Model\Entity\Person\Id $id
		, \After\Model\Entity\Person\Name $name
		, \After\Model\Entity\Person\Character $character
	)
	{
		$this->id = $id;
		$this->name = $name;
		$this->character = $character;
	}

	public function entityVariables() : array
	{
		return get_object_vars($this);
	}


	public function id()
	{
		return $this->id;
	}


	public function name()
	{
		return $this->name;
	}


	public function rename(\After\Model\Entity\Person\Name $name)
	{
		$this->name = $name;
	}


	public function character()
	{
		return $this->character;
	}
}
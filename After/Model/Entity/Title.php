<?php

namespace After\Model\Entity;


class Title implements IEntity
{

	/**
	 * @var \After\Model\Entity\Title\Id
	 */
	private $id;

	/**
	 * @var \After\Model\Entity\Title\Name
	 */
	private $name;

	/**
	 * @var int
	 */
	private $year;


	public function __construct(
		\After\Model\Entity\Title\Id $id
		, \After\Model\Entity\Title\Name $name
		, Year $year
	)
	{
		$this->year = $year;
		$this->name = $name;
		$this->id = $id;
	}


	public function entityVariables() : array
	{
		return get_object_vars($this);
	}


	public function year() : Year
	{
		return $this->year;
	}


	public function name() : \After\Model\Entity\Title\Name
	{
		return $this->name;
	}


	public function rename(\After\Model\Entity\Title\Name $name)
	{
		$this->name = $name;
	}


	public function id() : \After\Model\Entity\Title\Id
	{
		return $this->id;
	}
}
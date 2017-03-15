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
	 * @var Year
	 */
	private $year;

	/**
	 * @var \After\Model\Entity\Title\Description
	 */
	private $description;

	/**
	 * @var \After\Model\Entity\Ids
	 */
	private $ids;

	/**
	 * @var \After\Model\Collection\People
	 */
	private $people;


	public function __construct(
		\After\Model\Entity\Title\Id $id
		, \After\Model\Entity\Title\Name $name
		, \After\Model\Entity\Title\Description $description
		, Year $year
		, Ids $idCollection
		, \After\Model\Collection\People $people
	)
	{
		$this->year = $year;
		$this->name = $name;
		$this->id = $id;
		$this->description = $description;
		$this->ids = $idCollection;
		$this->people = $people;
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


	public function description() : \After\Model\Entity\Title\Description
	{
		return $this->description;
	}


	public function ids() : Ids
	{
		return $this->ids;
	}


	public function people() : \After\Model\Collection\People
	{
		return $this->people;
	}
}
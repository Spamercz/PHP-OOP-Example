<?php

namespace App\Model\Entity;


class Title extends \App\Model\Entity
{
	/**
	 * @var array
	 */
	private $metadata;

	/**
	 * @var string
	 */
	private $id;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var int
	 */
	private $year;

	/**
	 * @var string
	 */
	private $description;

	/**
	 * @var \App\Model\Collection
	 */
	private $people;

	/**
	 * @var int
	 */
	private $imdbId;


	public function __construct($data)
	{
		$this->metadata = $data;
	}

	/**
	 * @return array
	 */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/**
	 * @param array $metadata
	 */
	public function setMetadata($metadata)
	{
		$this->metadata = $metadata;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->metadata['id'];
	}

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->metadata['id'] = $id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->metadata['name'];
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->metadata['name'] = $name;
	}

	/**
	 * @return int
	 */
	public function getYear()
	{
		return $this->metadata['year'];
	}

	/**
	 * @param int $year
	 */
	public function setYear($year)
	{
		$this->metadata['year'] = $year;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->metadata['description'];
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->metadata['description'] = $description;
	}

	/**
	 * @return \App\Model\Collection
	 */
	public function getPeople()
	{
		return new \App\Model\Collection($this->metadata['people']);
	}

	/**
	 * @param array $people
	 */
	public function setPeople($people)
	{
		$this->metadata['people'] = $people;
	}

	/**
	 * @return int
	 */
	public function getImdbId()
	{
		return $this->metadata['ids']['imdb'];
	}

	/**
	 * @param int $imdbId
	 */
	public function setImdbId($imdbId)
	{
		$this->metadata['ids']['imdb'] = $imdbId;
	}
}
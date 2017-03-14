<?php

namespace App\Model\Entity;


class Person extends \App\Model\Entity
{
	/**
	 * @var array
	 */
	private $metadata;

	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $character;


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
	 * @return int
	 */
	public function getId()
	{
		return $this->metadata['id'];
	}

	/**
	 * @param int $id
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
	 * @return string
	 */
	public function getCharacter()
	{
		return $this->metadata['character'];
	}

	/**
	 * @param string $character
	 */
	public function setCharacter($character)
	{
		$this->metadata['character'] = $character;
	}
}
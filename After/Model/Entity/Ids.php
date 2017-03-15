<?php

namespace After\Model\Entity;

class Ids implements IEntity
{

	/**
	 * @var \After\Model\Entity\Ids\Imdb
	 */
	private $imdb;


	public function __construct(
		\After\Model\Entity\Ids\Imdb $imdbId
	)
	{
		$this->imdb = $imdbId;
	}


	public function entityVariables() : array
	{
		return get_object_vars($this);
	}


	public function imdb() : \After\Model\Entity\Ids\Imdb
	{
		return $this->imdb;
	}
}
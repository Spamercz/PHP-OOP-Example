<?php

namespace Before\Model;


class Collection
{
	/**
	 * @var array
	 */
	private $metadata;


	public function __construct($data)
	{
		$this->metadata = $data;
	}


	public function getData()
	{
		foreach ($this->metadata as $item) {
			yield new \Before\Model\Entity\Person($item);
		}
	}
}
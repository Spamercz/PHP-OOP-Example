<?php

namespace App\Model;


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
			yield new \App\Model\Entity\Person($item);
		}
	}
}
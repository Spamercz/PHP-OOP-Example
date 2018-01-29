<?php declare(strict_types = 1);

namespace Spameri\YieldCollection;


class VideoFactory
{
	public function create(array $data) : \Generator
	{
		foreach ($data as $entity) {
			yield new Video($entity['name'], $entity['year']);
		}
	}
}

<?php declare(strict_types = 1);


namespace Spameri\YieldCollection;


class VideoCollection implements \Iterator
{

	/**
	 * @var \Generator
	 */
	private $generator;


	public function __construct(
		\Generator $generator
	)
	{
		$this->generator = $generator;
	}


	public function current() : Video
	{
		return $this->generator->current();
	}


	public function next() : void
	{
		$this->generator->next();
	}


	public function key()
	{
		return $this->generator->key();
	}


	public function valid() : bool
	{
		return $this->generator->valid();
	}


	public function rewind() : void
	{
		$this->generator->rewind();
	}
}

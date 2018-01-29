<?php declare(strict_types = 1);

namespace Spameri\YieldCollection;


class Video
{

	/**
	 * @var string
	 */
	private $name;
	/**
	 * @var int
	 */
	private $year;


	public function __construct(
		string $name
		, int $year
	)
	{
		echo "constructed " . $this->name . " \n";

		$this->name = $name;
		$this->year = $year;
	}


	public function name() : string
	{
		return $this->name;
	}


	public function year() : int
	{
		return $this->year;
	}
}

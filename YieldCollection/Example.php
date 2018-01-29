<?php declare(strict_types = 1);

require_once __DIR__ . '/VideoCollection.php';
require_once __DIR__ . '/Video.php';
require_once __DIR__ . '/VideoFactory.php';


$data = [
	1 => [
		'name' => 'Iron man',
		'year' => 2005,
	],
	2 => [
		'name' => 'Iron man 2',
		'year' => 2005,
	],
	3 => [
		'name' => 'Iron man 3',
		'year' => 2005,
	],
];

$factory = new \Spameri\YieldCollection\VideoFactory();
$generator = $factory->create($data);

$collection = new \Spameri\YieldCollection\VideoCollection($generator);

foreach ($collection as $video) {
	var_dump($video);
}

echo "Done \n";


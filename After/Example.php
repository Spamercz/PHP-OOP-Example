<?php
ini_set('xdebug.var_display_max_depth', 20);

include_once __DIR__ . '/Model/Entity/IEntity.php';
include_once __DIR__ . '/Model/Entity/IValue.php';
include_once __DIR__ . '/Model/Entity/IntegerType.php';
include_once __DIR__ . '/Model/Entity/StringType.php';
include_once __DIR__ . '/Model/Entity/Year.php';
include_once __DIR__ . '/Model/Entity/Title.php';
include_once __DIR__ . '/Model/Entity/Title/Name.php';
include_once __DIR__ . '/Model/Entity/Title/Id.php';
include_once __DIR__ . '/Model/ToArray.php';
include_once __DIR__ . '/Model/ExtractValue.php';
include_once __DIR__ . '/Model/Extract/StringValue.php';
include_once __DIR__ . '/Model/Extract/IntegerValue.php';
include_once __DIR__ . '/Model/EntityToArray.php';
include_once __DIR__ . '/Model/Exception/OutOfRange.php';
include_once __DIR__ . '/Model/Exception/NotImplemented.php';
include_once __DIR__ . '/Model/Entity/Ids/Imdb.php';
include_once __DIR__ . '/Model/Entity/Title/Description.php';
include_once __DIR__ . '/Model/Entity/Ids.php';
include_once __DIR__ . '/Model/Collection/ICollection.php';
include_once __DIR__ . '/Model/Collection/People.php';
include_once __DIR__ . '/Model/Entity/Person.php';
include_once __DIR__ . '/Model/Entity/Person/Character.php';
include_once __DIR__ . '/Model/Entity/Person/Name.php';
include_once __DIR__ . '/Model/Entity/Person/Id.php';
include_once __DIR__ . '/Model/CollectionToArray.php';
include_once __DIR__ . '/Model/Exception/EmptyCollection.php';


// 1. Data encapsulated in objects - this should do entity factory
$people = new \After\Model\Collection\People([]);
$people->add(new \After\Model\Entity\Person(
	new \After\Model\Entity\Person\Id(
		new \After\Model\Entity\IntegerType(1772)
	)
	, new \After\Model\Entity\Person\Name(
		new \After\Model\Entity\StringType('Patrick Stewart')
	)
	, new \After\Model\Entity\Person\Character(
		new \After\Model\Entity\StringType('Charles Xavier')
	)
));

$entity = new \After\Model\Entity\Title(
	new \After\Model\Entity\Title\Id(
		new \After\Model\Entity\StringType('asdfghjk')
	)
	, new \After\Model\Entity\Title\Name(
		new \After\Model\Entity\StringType('Logan')
	)
	, new \After\Model\Entity\Title\Description(
		new \After\Model\Entity\StringType('In the near future, a weary Logan cares for an ailing Professor X somewhere on the Mexican border. However, Logan\'s attempts to hide from the world and his legacy are upended when a young mutant arrives, pursued by dark forces.')
	)
	, new \After\Model\Entity\Year(
		new \After\Model\Entity\IntegerType(2017)
	)
	, new \After\Model\Entity\Ids(
		new \After\Model\Entity\Ids\Imdb(
			new \After\Model\Entity\IntegerType(3315342)
		)
	)
	, $people
);

$newName = new \After\Model\Entity\Title\Name(
	new \After\Model\Entity\StringType('Old man Logan')
);
$entity->rename($newName);

$entity->people()->add(new \After\Model\Entity\Person(
	new \After\Model\Entity\Person\Id(new \After\Model\Entity\IntegerType(413168))
	, new \After\Model\Entity\Person\Name(new \After\Model\Entity\StringType('Hugh Jackman'))
	, new \After\Model\Entity\Person\Character(new \After\Model\Entity\StringType('Logan'))
));

/**
 * @var $person After\Model\Entity\Person
 */
foreach ($entity->people()->items() as $person) {
	$person->name();
	$person->character();
}

var_dump($entity);
$array = (new \After\Model\ToArray())->decorate($entity);
var_dump($array);

echo $entity->ids()->imdb();

// 20 Class, 3 Interface, 3 Exception

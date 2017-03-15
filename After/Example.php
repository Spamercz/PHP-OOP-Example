<?php

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
include_once __DIR__ . '/Model/StringValue.php';
include_once __DIR__ . '/Model/IntegerValue.php';
include_once __DIR__ . '/Model/EntityToArray.php';
include_once __DIR__ . '/Model/Exception/OutOfRange.php';
include_once __DIR__ . '/Model/Exception/NotImplemented.php';


// 1. Data encapsulated in objects - this should do entity factory
$entity = new \After\Model\Entity\Title(
	new \After\Model\Entity\Title\Id(
		new \After\Model\Entity\StringType('asdfghjk')
	)
	, new \After\Model\Entity\Title\Name(
		new \After\Model\Entity\StringType('Logan')
	)
	, new \After\Model\Entity\Year(
		new \After\Model\Entity\IntegerType(2017)
	)
);


// 2. Decorating data
$entityToArray = new \After\Model\ToArray(
	new \After\Model\EntityToArray(
		new \After\Model\ExtractValue(
			new \After\Model\IntegerValue()
			, new \After\Model\StringValue()
		)
	)
);

var_dump($entity);
var_dump($entityToArray->decorate($entity));


// 11 Class, 2 Interface, 2 Exception

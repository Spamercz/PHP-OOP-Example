## Before
1. Get Data
```php
$data = $this->elastic->get('3315342');
```

2. Map Data
```php
$title = new \Before\Model\Entity\Title($data);
```

3. Edit entity
```php
$title->setName('Logan');
$title->setPeople([
	123456 => [
		'id' => 123456,
		'name' => 'Hugh Jackman',
		'character' => 'James Howlett',
	 ],
]);
```

4. Using entity
```php
$title->getName();
foreach ($title->getPeople()->getData() as $person) {
	$person->getName();
	$person->getCharacter();
}

```

5. Save entity
```php
$this->elastic->save($entity->toArray());
```

## After

1. Get Data
```php
$data = $this->elastic->get('3315342');
```

2. Map Data - should be in entity factory
```php
$people = new \After\Model\Collection\People([]);
$people->add(new \After\Model\Entity\Person(
	new \After\Model\Entity\Person\Id(
		new \After\Model\Entity\IntegerType($data['people']['id'])
	)
	, new \After\Model\Entity\Person\Name(
		new \After\Model\Entity\StringType($data['people']['name'])
	)
	, new \After\Model\Entity\Person\Character(
		new \After\Model\Entity\StringType($data['people']['character'])
	)
));

$title = new \After\Model\Entity\Title(
	new \After\Model\Entity\Title\Id(
		new \After\Model\Entity\StringType($data['id'])
	)
	, new \After\Model\Entity\Title\Name(
		new \After\Model\Entity\StringType($data['name'])
	)
	, new \After\Model\Entity\Title\Description(
		new \After\Model\Entity\StringType($data['description'])
	)
	, new \After\Model\Entity\Year(
		new \After\Model\Entity\IntegerType($data['year'])
	)
	, new \After\Model\Entity\Ids(
		new \After\Model\Entity\Ids\Imdb(
			new \After\Model\Entity\IntegerType($data['ids']['imdb'])
		)
	)
	, $people
);
```

3. Edit entity
```php
$newName = new \After\Model\Entity\Title\Name(
	new \After\Model\Entity\StringType('Old man Logan')
);
$title->rename($newName);

$entity->people()->add(new \After\Model\Entity\Person(
	new \After\Model\Entity\Person\Id(new \After\Model\Entity\IntegerType(413168))
	, new \After\Model\Entity\Person\Name(new \After\Model\Entity\StringType('Hugh Jackman'))
	, new \After\Model\Entity\Person\Character(new \After\Model\Entity\StringType('Logan'))
));
```

4. Using entity
```php
$title->name();
foreach ($entity->people()->items() as $person) {
	$person->name();
	$person->character();
}

```

5. Save entity
```php
$this->elastic->save((new \After\Model\ToArray())->decorate($entity));
```

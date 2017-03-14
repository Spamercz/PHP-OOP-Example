## Old
1. Get Data
```php
$data = $this->elastic->get('3315342');
```

2. Map Data
```php
$title = new \App\Model\Entity\Title($data);
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

## New


<?php

namespace Before\Model;

class Entity
{
	/**
	 * @return array
	 */
	public function toArray()
	{
		$array = [];
		foreach (get_object_vars($this) as $name => $value) {
			if (is_object($value)) {
				/**
				 * @var $value Entity
				 */
				$array[$name] = $value->toArray();
			} else {
				$array[$name] = $value;
			}
		}
		return $array;
	}
}
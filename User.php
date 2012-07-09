<?php
class User
{
	private $name;

	public function __construct(array $properties)
	{
		$this->name = $properties['name'];
	}

	public function getName()
	{
		return $this->name;
	}
}
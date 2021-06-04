<?php 

namespace DataStruct;

class Map
{
	protected $map;

	public function __construct(\Ds\Map $map)
	{
		$this->map = $map;
	}

	public function count()
	{
		return $this->map->count();
	}
}
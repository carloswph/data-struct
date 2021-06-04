<?php 

namespace DataStruct;

class Tools implements \Countable
{
	protected $data = [];

	public function __construct($objects)
	{
		if(is_object($objects)) {
			$this->data[] = $objects;
		}

		if(is_array($objects)) {
			foreach ($objects as $object) {
				$this->data[] = $object;
			}
		}
	}

	public function convert(string $dsType)
	{
		$n = $this->count();

		for($i = 0; $i < $n; $i++) {
			switch ($dsType) {
				case 'queue':
					$this->data[$i] = queue($this->data[$i]->toArray());
					break;

				case 'stack':
					$this->data[$i] = stack($this->data[$i]->toArray());
					break;

				case 'set':
					$this->data[$i] = set($this->data[$i]->toArray());
					break;

				case 'deque':
					$this->data[$i] = deque($this->data[$i]->toArray());
					break;

				case 'vector':
					$this->data[$i] = vector($this->data[$i]->toArray());
					break;

				case 'map':
					$this->data[$i] = map($this->data[$i]->toArray());
					break;
				
				default:
					break;
			}
		}

		return $this;
	}

	public function count()
	{
		return count($this->data);
	}
}
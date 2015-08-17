<?php

namespace BubbaGump\Collection;


class PlatedShrimp extends \ArrayObject implements ShrimpCollectionInterface
{


	public function addShrimp($shrimp)
	{
		$this[] = $shrimp;
	}

	public function removeShrimp()
	{
		$i = count($this);
		if ($i == 0) {
			return null;
		}
		$r = rand(0, $i - 1);
		$d = $this[$r];
		$this->offsetUnset($r);
		$this->exchangeArray(array_values($this->getArrayCopy()));
		return $d;
	}
}
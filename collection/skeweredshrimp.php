<?php

namespace BubbaGump\Collection;


class SkeweredShrimp extends \SplQueue implements ShrimpCollectionInterface
{


	public function addShrimp($shrimp)
	{
		$this->enqueue($shrimp);
	}

	public function removeShrimp()
	{
		return $this->dequeue();
	}

}
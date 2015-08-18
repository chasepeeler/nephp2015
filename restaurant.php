<?php

namespace BubbaGump;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Dish\Soup;


class Restaurant
{

	public function processOrder($name)
	{
		$ns = '\BubbaGump\Meal\\';
		if (class_exists($ns . $name) && is_a($ns . $name, $ns . 'MealInterface', true)) {
			$class = $ns . $name;
			/** @var \BubbaGump\Meal\MealInterface $c */
			$c      = new $class($this);
			$shrimp = $c->prepare();
			$shrimp = $c->cook($shrimp);
			$dish = $c->finalize($shrimp);
			$this->serve($dish);
		}
	}

	/**
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return $this
	 */
	public function peel($shrimp){
		foreach($shrimp as $s){
			//peel the shrimp
		}
		return $this;
	}

	/**
	 * @param ShrimpCollectionInterface|Dish $shrimp
	 *
	 * @return $this
	 */
	public function serve($shrimp){
		if($shrimp instanceof Soup){
			//put dish in bowl
		} else {
			//put shrimp on plate
		}
		//serve to customer
	}

	/**
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function chop($shrimp){
		//chop up shrimp into smaller pieces
	}

	public function sauce($shrimp,$type){
		//put sauce on shrimp
	}






}
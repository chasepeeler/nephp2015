<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Dish;
use BubbaGump\Dish\Soup;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

trait ShrimpTrait
{

	/**
	 * @return Restaurant
	 */
	abstract protected function getRestaurant();

	/**
	 * @return int
	 */
	abstract protected function getNumShrimp();

	/**
	 * Prepare the meal to be cooked.
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function prepare()
	{
		$plate = new PlatedShrimp();
		for ($i = 0; $i < $this->getNumShrimp(); $i++) {
			$plate->addShrimp(new Shrimp());
		}
		$this->getRestaurant()->peel($plate);
		return $plate;
	}


	/**
	 * Serve the meal
	 *
	 *
	 * @param ShrimpCollectionInterface|Dish $shrimp
	 *
	 * @return Dish
	 */
	public function finalize($shrimp){
		$dish = new Dish\Shrimp();
		$dish->addShrimp($shrimp);
		return $dish;
	}

}
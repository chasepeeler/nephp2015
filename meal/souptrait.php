<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Dish;
use BubbaGump\Dish\Soup;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

trait SoupTrait
{

	/**
	 * @return Restaurant
	 */
	abstract protected function getRestaurant();

	/**
	 * @return Soup
	 */
	abstract protected function getDish();

	/**
	 * Prepare the meal to be cooked.
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function prepare()
	{
		$plate = new PlatedShrimp();
		for ($i = 0; $i < 10; $i++) {
			$plate->addShrimp(new Shrimp());
		}
		$this->getRestaurant()->peel($plate);
		$this->getRestaurant()->chop($plate);
		return $plate;
	}


	/**
	 * Cook the meal
	 *
	 *
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function cook($shrimp)
	{
		return $shrimp;
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
		$dish = $this->getDish();
		$dish->addShrimp($shrimp);
		$dish->prepareDish();
		return $dish;
	}

}
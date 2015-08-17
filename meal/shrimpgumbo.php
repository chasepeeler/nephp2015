<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class ShrimpGumbo implements MealInterface
{

	/**
	 * @var Restaurant
	 */
	protected $restaurant;

	/**
	 * @param Restaurant $restaurant
	 */
	public function __construct($restaurant)
	{
		$this->restaurant = $restaurant;
	}


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
		$this->restaurant->peel($plate);
		$this->restaurant->chop($plate);
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
	public function finalize($shrimp)
	{
		$dish = new Dish\Soup\Gumbo();
		$dish->addShrimp($shrimp);
		$dish->prepareDish();
		return $dish;
	}
}
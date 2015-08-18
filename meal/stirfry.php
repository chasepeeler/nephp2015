<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Dish\Soup;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class StirFry implements MealInterface
{

	use SoupTrait;
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


	public function cook($shrimp){
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
		$dish = new Dish\StirFry();
		$dish->addVegetables();
		$dish->addShrimp($shrimp);
		$dish->prepareDish();
		return $dish;
	}


	/**
	 * @return Restaurant
	 */
	protected function getRestaurant()
	{
		return $this->restaurant;
	}

	/**
	 * @return Soup
	 */
	protected function getDish()
	{
		return new Dish\StirFry(); //won't get called though
	}
}
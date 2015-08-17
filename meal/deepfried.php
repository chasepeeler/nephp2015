<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class DeepFried implements MealInterface
{

	/**
	 * @param Restaurant $restaurant
	 */
	public function __construct($restaurant)
	{
		$this->restaurant = $restaurant;
	}

	/**
	 * @var Restaurant
	 */
	protected $restaurant;

	/**
	 * Prepare the meal to be cooked.
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function prepare()
	{
		$plate = new SkeweredShrimp();
		for($i=0;$i<10;$i++){
			$plate->addShrimp(new Shrimp());
		}
		$this->restaurant->peel($plate);
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
		$this->restaurant->cook('DeepFried',$shrimp);
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
		$dish = new Dish\Shrimp();
		$dish->addShrimp($shrimp);
		return $dish;
	}
}
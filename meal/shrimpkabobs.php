<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class ShrimpKabobs implements MealInterface
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
		$skewer = new SkeweredShrimp();
		for($i=0;$i<6;$i++){
			$skewer->addShrimp(new Shrimp());
		}
		$this->restaurant->peel($skewer);
		return $skewer;
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
		$this->restaurant->sauce($shrimp,'bbq');
		$this->restaurant->cook('Grilled',$shrimp);
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
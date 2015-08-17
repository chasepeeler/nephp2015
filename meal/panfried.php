<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class PanFried implements MealInterface
{

	use ShrimpTrait;

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
	 * Cook the meal
	 *
	 *
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function cook($shrimp)
	{
		$this->restaurant->cook('Sauteed',$shrimp);
		return $shrimp;
	}

	/**
	 * @return Restaurant
	 */
	protected function getRestaurant()
	{
		return $this->restaurant;
	}

	/**
	 * @return int
	 */
	protected function getNumShrimp()
	{
		return 10;
	}
}
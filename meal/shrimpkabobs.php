<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class ShrimpKabobs implements MealInterface
{

	use ShrimpTrait {
		prepare as stPrepare;
	}

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
		$plate = $this->stPrepare();
		$skewer = new SkeweredShrimp();
		foreach($plate as $shrimp){
			$skewer->addShrimp($shrimp);
		}
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
		return 6;
	}
}
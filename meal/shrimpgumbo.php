<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Dish;
use BubbaGump\Dish\Soup;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class ShrimpGumbo implements MealInterface
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
		return new Dish\Soup\Gumbo();
	}

}
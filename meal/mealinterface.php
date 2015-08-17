<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Dish;
use BubbaGump\Restaurant;

interface MealInterface
{

	/**
	 * @param Restaurant  $restaurant
	 */
	public function __construct($restaurant);

	/**
	 * Prepare the meal to be cooked.
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function prepare();

	/**
	 * Cook the meal
	 *
	 *
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return ShrimpCollectionInterface
	 */
	public function cook($shrimp);

	/**
	 * Serve the meal
	 *
	 *
	 * @param ShrimpCollectionInterface|Dish  $shrimp
	 *
	 * @return Dish
	 */
	public function finalize($shrimp);


}
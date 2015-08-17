<?php

namespace BubbaGump\Meal;

interface MealInterface
{

	/**
	 * Prepare the meal to be cooked.
	 *
	 * @return mixed
	 */
	public function prepare();

	/**
	 * Cook the meal
	 *
	 * @return mixed
	 */
	public function cook();

	/**
	 * Serve the meal
	 *
	 * @return mixed
	 */
	public function serve();


}
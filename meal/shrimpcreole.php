<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
use BubbaGump\Restaurant;
use BubbaGump\Shrimp;

class ShrimpCreole implements MealInterface
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
		$creole = $this->makeCreole($shrimp);
		//make creole
		//add shrimp to creole
		//return creole
		return $shrimp;
	}

	/**
	 * Serve the meal
	 *
	 *
	 * @param ShrimpCollectionInterface $shrimp
	 */
	public function serve($shrimp)
	{
		//put creole in bowl
		//deliver creole to customer
	}

	protected function bbq($shrimp)
	{
		foreach ($shrimp as $s) {
			$this->baste($s);
		}
		$this->restaurant->cook('Grilled', $shrimp);
		return $shrimp;
	}


	protected function baste($shrimp)
	{
		//cover shrimp with bbq sauce
	}


}
<?php

namespace BubbaGump\Meal;

use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;
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
		$this->bbq($shrimp);
	}

	/**
	 * Serve the meal
	 *
	 *
	 * @param ShrimpCollectionInterface $shrimp
	 */
	public function serve($shrimp)
	{
		//deliver shrimp to customer
	}

	protected function bbq($shrimp){
		foreach($shrimp as $s){
			$this->baste($s);
		}
		$this->restaurant->cook('Grilled',$shrimp);
		return $shrimp;
	}


	protected function baste($shrimp){
		//cover shrimp with bbq sauce
	}


}
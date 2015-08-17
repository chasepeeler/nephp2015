<?php

namespace BubbaGump;

use BubbaGump\Collection\ShrimpCollectionInterface;

abstract class Dish
{

	/**
	 * @var ShrimpCollectionInterface
	 */
	protected $shrimp;


	/**
	 * @param ShrimpCollectionInterface $shrimp
	 */
	public function addShrimp($shrimp)
	{
		$this->shrimp = $shrimp;
	}

	abstract public function prepareDish();




}
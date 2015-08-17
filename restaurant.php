<?php

namespace BubbaGump;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;

class Restaurant
{

	public function processOrder($name)
	{
		switch($name){
			case "ShrimpKabobs":
				$skewer = new SkeweredShrimp();
				for($i=0;$i<6;$i++) {
					$skewer->addShrimp(new Shrimp());
				}
				$this->cook('Barbecued',$skewer);
				$this->serve($skewer);
				break;
			case "ShrimpCreole":
				$plate = new PlatedShrimp();
				for($i=0;$i<10;$i++){
					$plate->addShrimp(new Shrimp());
				}
				$this->peel($plate);
				$choppedShrimp = $this->chop($plate);
				//prepare creole
				//add chopped shrimp to creole
				//serve creole
				break;
			case "ShrimpGumbo":
				$plate = new PlatedShrimp();
				for ($i = 0; $i < 10; $i++) {
					$plate->addShrimp(new Shrimp());
				}
				$this->peel($plate);
				$choppedShrimp = $this->chop($plate);
				//prepare gumbo
				//add chopped shrimp to gumbo
				//serve gumbo
				break;
			case "PanFried":
				$plate = new PlatedShrimp();
				for ($i = 0; $i < 10; $i++) {
					$plate->addShrimp(new Shrimp());
				}
				$this->peel($plate);
				$this->cook('Sauteed',$plate);
				$this->serve($plate);
				break;
			case "DeepFried":
				$plate = new PlatedShrimp();
				for ($i = 0; $i < 10; $i++) {
					$plate->addShrimp(new Shrimp());
				}
				$this->peel($plate);
				$this->cook('DeepFry', $plate);
				$this->serve($plate);
				break;
			case "StirFried":
				$plate = new PlatedShrimp();
				for ($i = 0; $i < 10; $i++) {
					$plate->addShrimp(new Shrimp());
				}
				$this->peel($plate);
				$this->cook('StirFry', $plate);
				$this->serve($plate);
				break;
			case "PineappleShrimp":
				break;
			case "LemonShrimp":
				break;
			case "CoconutShrimp":
				break;
			case "PepperShrimp":
				break;
			case "ShrimpSoup":
				break;
			case "ShrimpStew":
				break;
			case "ShrimpSalad":
				break;
			case "ShrimpAndPotatoes":
				break;
			case "ShrimpBurger":
				break;
			case "ShrimpSandwich":
				break;
			default:
				break;
		}

	}

	/**
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return $this
	 */
	protected function peel($shrimp){
		foreach($shrimp as $s){
			//peel the shrimp
		}
		return $this;
	}

	/**
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return $this
	 */
	protected function serve($shrimp){
		
	}

	/**
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return ShrimpCollectionInterface
	 */
	protected function chop($shrimp){

	}

	protected function cook($method,$shrimp){
		switch($method) {
			case "Barbecued":
				break;
			case "Broiled":
				break;
			case "Baked":
				break;
			case "Sauteed":
				break;
			default:
				break;
		}
	}




}
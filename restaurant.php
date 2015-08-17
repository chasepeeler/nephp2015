<?php

namespace BubbaGump;

use BubbaGump\Collection\PlatedShrimp;
use BubbaGump\Collection\ShrimpCollectionInterface;
use BubbaGump\Collection\SkeweredShrimp;

class Restaurant
{

	public function processOrder($name)
	{

		$ns = '\BubbaGump\Meal\\';
		if(class_exists($ns.$name) && is_a($ns.$name,$ns.'MealInterface',true)){
			$class = $ns.$name;
			/** @var \BubbaGump\Meal\MealInterface $c */
			$c = new $class($this);
			$shrimp = $c->prepare();
			$shrimp = $c->cook($shrimp);
			$c->serve($shrimp);
		}
//
//			case "ShrimpCreole":
//				$plate = new PlatedShrimp();
//				for($i=0;$i<10;$i++){
//					$plate->addShrimp(new Shrimp());
//				}
//				$this->peel($plate);
//				$choppedShrimp = $this->chop($plate);
//				//prepare creole
//				//add chopped shrimp to creole
//				//serve creole
//				break;
//			case "ShrimpGumbo":
//				$plate = new PlatedShrimp();
//				for ($i = 0; $i < 10; $i++) {
//					$plate->addShrimp(new Shrimp());
//				}
//				$this->peel($plate);
//				$choppedShrimp = $this->chop($plate);
//				//prepare gumbo
//				//add chopped shrimp to gumbo
//				//serve gumbo
//				break;
//			case "PanFried":
//				$plate = new PlatedShrimp();
//				for ($i = 0; $i < 10; $i++) {
//					$plate->addShrimp(new Shrimp());
//				}
//				$this->peel($plate);
//				$this->cook('Sauteed',$plate);
//				$this->serve($plate);
//				break;
//			case "DeepFried":
//				$plate = new PlatedShrimp();
//				for ($i = 0; $i < 10; $i++) {
//					$plate->addShrimp(new Shrimp());
//				}
//				$this->peel($plate);
//				$this->cook('DeepFry', $plate);
//				$this->serve($plate);
//				break;
//			case "StirFried":
//				$plate = new PlatedShrimp();
//				for ($i = 0; $i < 10; $i++) {
//					$plate->addShrimp(new Shrimp());
//				}
//				$this->peel($plate);
//				$this->cook('StirFry', $plate);
//				$this->serve($plate);
//				break;
//			case "PineappleShrimp":
//				break;
//			case "LemonShrimp":
//				break;
//			case "CoconutShrimp":
//				break;
//			case "PepperShrimp":
//				break;
//			case "ShrimpSoup":
//				break;
//			case "ShrimpStew":
//				break;
//			case "ShrimpSalad":
//				break;
//			case "ShrimpAndPotatoes":
//				break;
//			case "ShrimpBurger":
//				break;
//			case "ShrimpSandwich":
//				break;
//			default:
//				break;
//		}

	}

	/**
	 * @param ShrimpCollectionInterface $shrimp
	 *
	 * @return $this
	 */
	public function peel($shrimp){
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
	public function chop($shrimp){

	}

	public function cook($method,$shrimp){
		switch($method) {
			case "Grilled":
				break;
			case "Broiled":
				break;
			case "Baked":
				break;
			case "Sauteed":
				break;
			case "DeepFried":
			default:
				break;
		}
	}




}
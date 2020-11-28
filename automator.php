<?php
include "animals.php";

class Automator {

  private $animalsArr;
  private $productCows;
  private $productChicken;
  private $animalChars;
  private $animalTypes;



  public function addAnimal($animalType, $count) {
    $char1 = $this->getAnimalChars();
    $types = $this->getAnimalTypes();
    $newAnimalsArr = [];
    echo "Adding ".$count." ".$types[$animalType]."s..\n";

    for ($i=0; $i < $count; $i++) {
      for ($j=0; $j < count($types); $j++) {
        if ($char1[$j]["type"] == $types[$animalType]) {
          $this->addAnimalId($j);
          $char1 = $this->getAnimalChars();
          $id = $char1[$j]["id"];
        }
      }

      $type = $types[$animalType];
      $newAnimal = new Animals($id, $type);
      $newAnimalsArr[] = $newAnimal;
      $this->animalsArr[] = $newAnimal;
    }

    echo "Added: ".$count." ".$types[$animalType]."s:\n";
    foreach ($newAnimalsArr as $key => $value) {
      echo $value->getType()." id: ".$value->getId()."\n";
    }
  }

  public function getProduct() {
    echo "Getting products from animals..\n";
    foreach ($this->animalsArr as $key => $animal) {
      foreach ($this->animalChars as $key => $char) {
        if ($animal->getType() == $char["type"]) {
          $min = $char["min"];
          $max = $char["max"];
          $animal->setProduct($min, $max);
        }
      }
    }
    echo "Products were gotten succesfully!\n";
  }

  public function getProductStat() {
    echo "Products in total:\n";
    foreach ($this->animalsArr as $key => $animal) {
      echo $animal->getType()."[".$animal->getId()."]: ";
      if ($animal->getType() == $this->animalTypes[0]) {
        $this->productCows += $animal->getProduct();
        echo $animal->getProduct()." l.\n";
      } else if ($animal->getType() == $this->animalTypes[1]) {
        $this->productChicken += $animal->getProduct();
        echo $animal->getProduct()." eggs.\n";
      }
    }

    echo $this->productCows." litres of milk; ".$this->productChicken." eggs\n";
  }









  public function Set($animalsArr, $productCows, $productChicken, $animalTypes, $animalChars1, $animalChars2) {
    $this->animalsArr = $animalsArr;
    $this->productCows = $productCows;
    $this->productChicken = $productChicken;
    $this->animalTypes = $animalTypes;
    $this->animalChars = array($animalChars1, $animalChars2);
  }

  public function getAnimalsArr() {
    return $this->animalsArr;
  }
  public function getProductCows() {
    return $this->productCows;
  }
  public function getProductChicken() {
    return $this->productChicken;
  }
  public function getAnimalChars() {
    return $this->animalChars;
  }
  public function getAnimalTypes() {
    return $this->animalTypes;
  }

  public function addCowProduct($val) {
    $this->productCows += $val;
  }
  public function addChickenProduct($val) {
    $this->productChicken += $val;
  }
  public function addAnimalId($type) {
    $this->animalChars[$type]["id"]++;
  }





}

?>

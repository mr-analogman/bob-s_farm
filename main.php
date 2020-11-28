<?php

include 'model.php';

$arr = array( array("type" => 0, "num" => 10),
              array("type" => 1, "num" => 20)
            );

$animalsArr = [];
$productCows = 0;
$productChicken = 0;
$animalTypes = array("Cow", "Chicken");
$animalChars1 = array("type" => "Cow", "id" => 1000, "min" => 8, "max" => 12);
$animalChars2 = array("type" => "Chicken", "id" => 2000, "min" => 0, "max" => 1);

Model::Initialize();
$automator = new Automator();
$automator->Set($animalsArr, $productCows, $productChicken, $animalTypes, $animalChars1, $animalChars2);
Model::workWithAnimals($automator, $arr);







echo "\n";

?>

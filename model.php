<?php
include 'automator.php';

class Model {
  private static $initArray = array(  array("#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#"),
                                      array("#", "#", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", "#", "#"),
                                      array("#", "#", " ", "B", "o", "b", "'", "s", " ", "f", "a", "r", "m", " ", "#", "#"),
                                      array("#", "#", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", "#", "#"),
                                      array("#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#")
                            );


  public static function Initialize() {
    self::Hello();
  }

  public static function workWithAnimals($automator, $arr) {
    foreach ($arr as $key => $value) {
      $automator->addAnimal($value["type"], $value["num"]);
    }
    $automator->getProduct();
    $automator->getProductStat();

  }

  private function Hello() {
    $arr = self::$initArray;
    echo "\n";
    for ($i=0; $i < count($arr); $i++) {
      echo "\t";
      foreach ($arr[$i] as $key => $value) {
        echo $value;
        echo " ";
      }
      echo "\n";
    }
    echo "\n";
  }




}

?>

<?php

class Animals {
  private $id;
  private $type;
  private $product;

  public function __construct($id, $type) {
    $this->setId($id);
    $this->setType($type);
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setType($type) {
    $this->type = $type;
  }

  public function setProduct($min, $max) {
    $this->product = rand($min, $max);
  }

  public function getId() {
    return $this->id;
  }

  public function getType() {
    return $this->type;
  }

  public function getProduct() {
    return $this->product;
  }

}

?>

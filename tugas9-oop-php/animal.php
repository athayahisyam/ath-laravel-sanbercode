<?php
class Animal

//release 0
{
  public $legs = 4;
  public $cold_blooded = "no";
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
}

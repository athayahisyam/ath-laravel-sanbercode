<?php
// require('animal.php');

class Ape extends Animal
{
    public $name;
    public $legs = 2;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function yell()
    {
        echo "Jump: U-u-a-a";
    }

}
?>
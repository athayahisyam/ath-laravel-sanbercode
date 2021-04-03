<?php

require('animal.php');

class Frog extends Animal
{
    public $name;
    public $legs = 2;
    public $jump = "hop-hop";
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function jump()
    {
        echo "Jump: Hop-Hop";
    }

}


?>
<?php
// require("animal.php");
require("frog.php");
require("ape.php");

$sheep = new Animal("shaun");

echo "Name: " . $sheep->name; // "shaun"
echo "<br>";
echo "Legs: " . $sheep->legs; // 4
echo "<br>";
echo "Cold Blooded: " . $sheep->cold_blooded; // "no"
echo "<br>";
echo "<br>";

//release 1

$kodok = new Frog("Buduk");
echo "Name: " .  $kodok->name;
echo "<br>";
echo "Legs: " . $kodok->legs;
echo "<br>";
echo "Cold Blooded: ". $kodok->cold_blooded;
echo "<br>";
$kodok->jump(); 
echo "<br>";
echo "<br>";

$sungokong = new Ape("Kera Sakti");
echo "Name: " .  $sungokong->name;
echo "<br>";
echo "Legs: " . $sungokong->legs;
echo "<br>";
echo "Cold Blooded: ". $sungokong->cold_blooded;
echo "<br>";
$sungokong->yell(); 




// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>


<?php
// require("animal.php");
require("frog.php");

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
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>


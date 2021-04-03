<?php
require("animal.php");

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 4
echo "<br>";
echo $sheep->cold_blooded; // "no"
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>


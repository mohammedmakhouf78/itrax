<?php

include './car.php';
use X\Car;
$c = new Car();
$c->stop();

echo "<br>";

$c->name = "ahmed";

echo "<br>";

echo $c->name;
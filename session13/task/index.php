<?php

// use BMW\Car;

// include './car.php';
// include './car2.php';

// $c = new Car();

// $c->move();

















spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    include "export/" . end($parts) . '.php';
});

use ExportNS\Export;
use ExportNS\Pdf;

$x = new Export("adsf",new Pdf());
$x->generate();
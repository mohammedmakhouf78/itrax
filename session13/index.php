<?php

// use BMW\Car;

// include './car.php';
// include './car2.php';

// $c = new Car();

// $c->move();



















use ExportNS\Export;

include './export/Export.php';
include "./export/Typeinterface.php";
include "./export/Pdf.php";
include "./export/Word.php";
include "./export/Excel.php";

$x = new Export("adsf",new Pdf());
$x->generate();
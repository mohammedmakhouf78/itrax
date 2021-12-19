<?php
require_once __DIR__ .'/../vendor/autoload.php';

use moham\mvc\controllers\home;
use moham\mvc\core\Bootstrap;
use moham\mvc\core\DB;
use moham\mvc\core\Registery;

Registery::set("db",new DB);

$bootstrap = new Bootstrap;
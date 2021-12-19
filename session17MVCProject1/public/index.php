<?php
require_once realpath(dirname(__DIR__)."/vendor/autoload.php");
require_once realpath(dirname(__DIR__)."/src/core/Session.php");
use Itrax\Mvc\core\AppSessionHandler;
use Itrax\Mvc\core\bootstrap;
use Itrax\Mvc\core\registry;
use Itrax\Mvc\core\Database\db;
use Itrax\Mvc\core\Database\dbpdo;
use Itrax\Mvc\core\validation;


registry::set("main",new db("itrax_vcard"));

$user_info = registry::get("main")->select("users","user_database")->where("subdomain",'=',"http://localhost:8088/itrax/session17MVCProject1/public/ahmed")->getRow();


registry::set("user_card_connection",new db("{$user_info['user_database']}"));

registry::set("validation",new validation);


$bootstrap = new bootstrap;

$bootstrap->run();
<?php

namespace moham\mvc\core;

class Controller
{
    public function view($path,$data)
    {
        extract($data);

        include dirname(__DIR__) . "/views/$path.php";
    }
}
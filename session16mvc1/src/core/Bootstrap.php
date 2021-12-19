<?php
namespace moham\mvc\core;

class Bootstrap
{
    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        // var_dump($_SERVER);
        // if(!empty($_SERVER['REQUEST_URI'])){
            $url = explode("/",$_SERVER['REQUEST_URI']);

            $this->controller = (isset($url[1]) && !empty($url[1])) ? $url[1] : "home";

            $this->method = ((isset($url[2]) && !empty($url[2])) ? $url[2] : "index");


            $this->params = ((isset($url[3]) && !empty($url[3])) ? explode("/",$url[3]) : []);
        // }
    }

    private function render()
    {
        $controller = "moham\\mvc\\controllers\\" . $this->controller;
        if(class_exists($controller))
        {
            $controller = new $controller();
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }
        }
    }
}

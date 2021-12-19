<?php
namespace moham\mvc\controllers;
use moham\mvc\core\Controller;
use moham\mvc\core\Validation;

class home extends Controller
{
    public function index()
    {
        echo "hello from index";
        $this->view('index',[
            'title' => "welcome"
        ]);
    }

    public function store()
    {
        $v = new Validation();
        $v->input('phoneNumber')->email();
        print_r($v->showError());
        $this->view('store',[
            'title' => "welcome"
        ]);
    }
}
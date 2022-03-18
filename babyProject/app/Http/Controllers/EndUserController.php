<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\EndUserInterface;
use Illuminate\Http\Request;

class EndUserController extends Controller
{
    public $endUserInterface;
    public function __construct(EndUserInterface $endUserInterface)
    {
        $this->endUserInterface = $endUserInterface;
    }

    public function home()
    {
        return $this->endUserInterface->home();
    }
}

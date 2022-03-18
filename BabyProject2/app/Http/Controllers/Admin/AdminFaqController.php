<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminFaqInterface;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public $interface;
    public function __construct(AdminFaqInterface $adminFaqInterface)
    {
        $this->interface = $adminFaqInterface;
    }
    
    public function index()
    {
        return $this->interface->index();
    }

    public function create()
    {
        return $this->interface->create();
    }

    public function store()
    {
        return $this->interface->store();
    }

    public function edit()
    {
        return $this->interface->edit();
    }

    public function update()
    {
        return $this->interface->update();
    }

    public function destroy()
    {
        return $this->interface->destroy();
    }
}

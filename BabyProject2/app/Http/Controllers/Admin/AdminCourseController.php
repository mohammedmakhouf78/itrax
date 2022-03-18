<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminCourseInterface;

class AdminCourseController extends Controller
{
    public $interface;
    public function __construct(AdminCourseInterface $adminCourseInterface)
    {
        $this->interface = $adminCourseInterface;
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

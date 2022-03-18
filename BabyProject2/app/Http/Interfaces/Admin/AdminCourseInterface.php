<?php

namespace App\Http\Interfaces\Admin;

interface AdminCourseInterface
{
    public function index();
    public function create();
    public function store();
    public function edit();
    public function update();
    public function destroy();
}
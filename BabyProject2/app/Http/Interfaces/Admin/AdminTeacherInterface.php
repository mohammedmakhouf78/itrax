<?php

namespace App\Http\Interfaces\Admin;

interface AdminTeacherInterface
{
    public function index();
    public function create();
    public function store();
    public function edit();
    public function update();
    public function destroy();
}
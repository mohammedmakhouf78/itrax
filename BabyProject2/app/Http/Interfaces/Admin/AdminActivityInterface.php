<?php

namespace App\Http\Interfaces\Admin;

use App\Models\Activity;

interface AdminActivityInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($activity);
    public function update($request,$activity);
    public function destroy();
}

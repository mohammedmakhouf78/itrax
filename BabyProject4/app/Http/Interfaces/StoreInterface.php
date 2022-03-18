<?php

namespace App\Http\Interfaces;

interface StoreInterface
{
    public function index() : array;
    public function create() : array;
    public function edit($model) : array;
}
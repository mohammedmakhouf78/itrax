<?php

namespace App\Http\Store;
use App\Http\Interfaces\StoreInterface;

use App\Models\Teacher;

class CourseStore implements StoreInterface
{
    public $modelName;
    public $model;
    
    public function columns()
    {
        return [
            'name' => 'text',
            'price' => 'text',
            'description' => 'textArea',
            'image' => 'file',
            'teacher_id' => 'select'
        ];
    }

    public function index() : array
    {
        return [
            'all' => $this->model::get(),
            'model' => $this->modelName,
            'columns' => $this->columns(),
        ];
    }

    public function create() : array
    {
        return [
            'model' => $this->modelName,
            'teachers' => Teacher::get(),
        ];
    }

    public function edit($model) : array
    {
        return [
            'model' => $this->modelName,
            'teachers' => Teacher::get(),
            'oldData' => $model
        ];
    }
    
}
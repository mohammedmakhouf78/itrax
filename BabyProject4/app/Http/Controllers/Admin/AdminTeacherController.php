<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\DeleteRequest;
use App\Http\Requests\Admin\Teacher\StoreRequest;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Http\Services\CrudService;
use App\Http\Store\TeacherStore;
use App\Models\Teacher;

class AdminTeacherController extends Controller
{
    public $crudService;
    
    public function __construct(CrudService $crudService,Teacher $teacher,TeacherStore $teacherStore)
    {
        $this->crudService = $crudService;
        $this->crudService->store = $teacherStore;
        $this->crudService->store->model = $teacher;
        $this->crudService->store->modelName = "teacher";
    }
    

    public function index()
    {
        return $this->crudService->index();
    }


    public function create()
    {
        return $this->crudService->create();
    }


    public function store(StoreRequest $request)
    {
        return $this->crudService->storeWithImage($request,'image');
    }


    public function show(Teacher $teacher)
    {
        
    }


    public function edit(Teacher $teacher)
    {
        return $this->crudService->edit($teacher);
    }


    public function update(UpdateRequest $request, Teacher $teacher)
    {
        return $this->crudService->updateWithImage($request,$teacher,'image');
    }

    public function destroy(DeleteRequest $deleteRequest,Teacher $teacher)
    {
        return $this->crudService->destroyWithImage($teacher,'image');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\DeleteRequest;
use App\Http\Requests\Admin\Course\StoreRequest;
use App\Http\Requests\Admin\Course\UpdateRequest;
use App\Http\Services\CrudService;
use App\Http\Store\CourseStore;
use App\Models\Course;

class AdminCourseController extends Controller
{
    public $crudService;
    
    public function __construct(CrudService $crudService,Course $course,CourseStore $courseStore)
    {
        $this->crudService = $crudService;
        $this->crudService->store = $courseStore;
        $this->crudService->store->model = $course;
        $this->crudService->store->modelName = "course";
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


    public function show(Course $course)
    {
        
    }


    public function edit(Course $course)
    {
        return $this->crudService->edit($course);
    }


    public function update(UpdateRequest $request, Course $course)
    {
        return $this->crudService->updateWithImage($request,$course,'image');
    }

    public function destroy(DeleteRequest $deleteRequest,Course $course)
    {
        return $this->crudService->destroyWithImage($course,'image');
    }
}
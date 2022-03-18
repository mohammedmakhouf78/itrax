<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Activity\DeleteRequest;
use App\Http\Requests\Admin\Activity\StoreRequest;
use App\Http\Requests\Admin\Activity\UpdateRequest;
use App\Models\Activity;
use App\Http\Services\CrudService;
use App\Http\Store\ActivityStore;

class AdminActivityController extends Controller
{
    public $crudService;
    
    public function __construct(CrudService $crudService,Activity $activity,ActivityStore $activityStore)
    {
        $this->crudService = $crudService;
        $this->crudService->store = $activityStore;
        $this->crudService->store->model = $activity;
        $this->crudService->store->modelName = "activity";
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
        return $this->crudService->storeWithImage($request,'icon');
    }


    public function show(Activity $activity)
    {
        
    }


    public function edit(Activity $activity)
    {
        return $this->crudService->edit($activity);
    }


    public function update(UpdateRequest $request, Activity $activity)
    {
        return $this->crudService->updateWithImage($request,$activity,'icon');
    }

    public function destroy(DeleteRequest $deleteRequest,Activity $activity)
    {
        return $this->crudService->destroyWithImage($activity,'icon');
    }
}
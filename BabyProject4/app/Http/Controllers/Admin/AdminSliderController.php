<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\DeleteRequest;
use App\Http\Requests\Admin\Slider\StoreRequest;
use App\Http\Requests\Admin\Slider\UpdateRequest;
use App\Http\Services\CrudService;
use App\Http\Store\SliderStore;
use App\Models\Slider;

class AdminSliderController extends Controller
{
    public $crudService;
    
    public function __construct(CrudService $crudService,Slider $slider,SliderStore $sliderStore)
    {
        $this->crudService = $crudService;
        $this->crudService->store = $sliderStore;
        $this->crudService->store->model = $slider;
        $this->crudService->store->modelName = "slider";
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


    public function show(Slider $slider)
    {
        
    }


    public function edit(Slider $slider)
    {
        return $this->crudService->edit($slider);
    }


    public function update(UpdateRequest $request, Slider $slider)
    {
        return $this->crudService->updateWithImage($request,$slider,'image');
    }

    public function destroy(DeleteRequest $deleteRequest,Slider $slider)
    {
        return $this->crudService->destroyWithImage($slider,'image');
    }
}

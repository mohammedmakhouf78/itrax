<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Faq\CreateRequest;
use App\Http\Requests\Admin\Faq\DeleteRequest;
use App\Http\Requests\Admin\Faq\UpdateRequest;
use App\Http\Services\CrudService;
use App\Models\Faq;
use Illuminate\Support\Facades\Schema;

class AdminFaqController extends Controller
{
    public $crudService;
    
    public function __construct(CrudService $crudService,Faq $faq)
    {
        $this->crudService = $crudService;
        $this->crudService->model = $faq;
        $this->crudService->modelName = "faq";
    }
    

    public function index()
    {
        return $this->crudService->index();
    }


    public function create()
    {
        return $this->crudService->create([
            'question' => 'text',
            'answer' => 'textArea'
        ]);
    }


    public function store(CreateRequest $request)
    {
        return $this->crudService->store($request);
    }


    public function show(Faq $faq)
    {
        
    }


    public function edit(Faq $faq)
    {
        return $this->crudService->edit($faq);
    }


    public function update(UpdateRequest $request, Faq $faq)
    {
        return $this->crudService->update($request,$faq);
    }

    public function destroy(DeleteRequest $deleteRequest,Faq $faq)
    {
        return $this->crudService->destroy($faq);
    }
}

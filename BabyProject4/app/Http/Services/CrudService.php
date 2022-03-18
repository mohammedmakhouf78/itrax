<?php
namespace App\Http\Services;

use App\Http\Traits\ImageTrait;
use RealRashid\SweetAlert\Facades\Alert;

class CrudService
{
    use ImageTrait;
    public $store;

    public function index()
    {
        $data = $this->store->index();
        return view("admin.pages.{$this->store->modelName}.index",$data);
    }


    public function create()
    {
        $data = $this->store->create();
        return view("admin.pages.{$this->store->modelName}.create",$data);
    }


    public function store($request)
    {
        $this->store->model::create($request->validated());
        Alert::success('success title',"{$this->store->modelName} was created");
        return redirect()->back();
    }


    public function edit($target)
    {
        $data = $this->store->edit($target);
        return view("admin.pages.{$this->store->modelName}.edit",$data);
    }


    public function update($request,$target)
    {
        $target->update($request->validated());
        Alert::info('success title',"{$this->store->modelName} was updated");
        return redirect()->back();
    }


    public function destroy($target)
    {
        $target->delete();
        Alert::info('success title',"{$this->store->modelName} was deleted");
        return redirect()->back();
    }

    
    public function storeWithImage($request,$iField)
    {
        $file_name = $this->uploadImage($request->$iField,$this->store->modelName);

        $data = $request->validated();
        $data[$iField] = $file_name;

        $this->store->model::create($data);

        Alert::success('success title',"{$this->store->modelName} was created");
        return redirect()->back();
    }


    public function updateWithImage($request,$target,$iField)
    {
        if(isset($request->$iField))
        {
            unlink(public_path($target->$iField));
            $file_name = $this->uploadImage($request->$iField,$this->store->modelName);
    
            $data = $request->validated();
            $data[$iField] = $file_name;
        }
        else
        {
            $data = $request->validated();
        }

        $target->update($data);

        Alert::success('success title',"{$this->store->modelName} was updated");
        return redirect()->back();
    }


    public function destroyWithImage($target,$iField)
    {
        if(file_exists(public_path($target->$iField)))
        {
            unlink(public_path($target->$iField));
        }
        
        $target->delete();
        Alert::info('success title',"{$this->store->modelName} was deleted");
        return redirect()->back();
    }
}
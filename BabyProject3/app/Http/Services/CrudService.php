<?php
namespace App\Http\Services;

use App\Http\Traits\ImageTrait;
use RealRashid\SweetAlert\Facades\Alert;

class CrudService
{
    use ImageTrait;
    public $modelName;
    public $model;


    public function index()
    {
        return view("admin.pages.{$this->modelName}.index",[
            'all' => $this->model::get(),
            'model' => $this->modelName
        ]);
    }


    public function create()
    {
        return view("admin.pages.{$this->modelName}.create",[
            'model' => $this->modelName,
        ]);
    }


    public function store($request)
    {
        $this->model::create($request->validated());
        Alert::success('success title',"{$this->modelName} was created");
        return redirect()->back();
    }


    public function edit($target)
    {
        return view("admin.pages.{$this->modelName}.edit",[
            'oldData' => $target,
            'model' => $this->modelName
        ]);
    }


    public function update($request,$target)
    {
        $target->update($request->validated());
        Alert::info('success title',"{$this->modelName} was updated");
        return redirect()->back();
    }


    public function destroy($target)
    {
        $target->delete();
        Alert::info('success title',"{$this->modelName} was deleted");
        return redirect()->back();
    }

    
    public function storeWithImage($request,$iField)
    {
        $file_name = $this->uploadImage($request->$iField,$this->modelName);

        $data = $request->validated();
        $data[$iField] = $file_name;

        $this->model::create($data);

        Alert::success('success title',"{$this->modelName} was created");
        return redirect()->back();
    }


    public function updateWithImage($request,$target,$iField)
    {
        if(isset($request->$iField))
        {
            unlink(public_path($target->$iField));
            $file_name = $this->uploadImage($request->$iField,$this->modelName);
    
            $data = $request->validated();
            $data[$iField] = $file_name;
        }
        else
        {
            $data = $request->validated();
        }

        $target->update($data);

        Alert::success('success title',"{$this->modelName} was updated");
        return redirect()->back();
    }


    public function destroyWithImage($target,$iField)
    {
        if(file_exists(public_path($target->$iField)))
        {
            unlink(public_path($target->$iField));
        }
        
        $target->delete();
        Alert::info('success title',"{$this->modelName} was deleted");
        return redirect()->back();
    }
}
<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminActivityInterface;
use App\Http\Requests\Admin\ActivityStoreRequest;
use App\Models\Activity;
use RealRashid\SweetAlert\Facades\Alert;

class AdminActivityRepo implements AdminActivityInterface
{

    public function index()
    {
        return view('admin.pages.activity.index',[
            'activities' => Activity::get()
        ]);
    }

    public function create()
    {
        return view('admin.pages.activity.create');
    }

    public function store($request)
    {
        Activity::create($request->validated());
        Alert::success("Activity was created successfully");
        return redirect()->back();
    }

    public function edit($activity)
    {
        return view('admin.pages.activity.edit',compact('activity'));
    }

    public function update($request,$activity)
    {
        $activity->update($request->validated());
        Alert::success("Activity was updated successfully");
        return redirect()->back();
    }

    public function destroy()
    {
        
    }
}

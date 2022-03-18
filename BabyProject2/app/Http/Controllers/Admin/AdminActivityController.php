<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminActivityInterface;
use App\Http\Requests\Admin\ActivityDeleteRequest;
use App\Http\Requests\Admin\ActivityStoreRequest;
use App\Http\Requests\Admin\ActivityUpdateRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class AdminActivityController extends Controller
{
    public $interface;
    public function __construct(AdminActivityInterface $adminActivityInterface)
    {
        $this->interface = $adminActivityInterface;
    }

    public function index()
    {
        return $this->interface->index();
    }

    public function create()
    {
        return $this->interface->create();
    }

    public function store(ActivityStoreRequest $request)
    {
        return $this->interface->store($request);
    }

    public function edit(Activity $activity)
    {
        return $this->interface->edit($activity);
    }

    public function update(ActivityUpdateRequest $request,Activity $activity)
    {
        return $this->interface->update($request,$activity);
    }

    public function destroy(ActivityDeleteRequest $activityDeleteRequest)
    {
        return $this->interface->destroy();
    }
}

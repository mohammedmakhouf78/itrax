<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    public function index()
    {
        return view('admin.faq.index');
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(CreateFaqRequest $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        Alert::success('success title',"faq was created");

        return redirect()->back();
    }

    public function edit(UpdateFaqRequest $request,Faq $faq)
    {
        $faq->update([
           'question' => $request->question,
           'answer' => $request->answer
        ]);


    }
}

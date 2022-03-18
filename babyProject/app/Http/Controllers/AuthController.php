<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials))
        {
            return redirect(route('dashboard'));
        }

        Alert::error('error','user not found');

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        return redirect(route('admin.loginPage'));
    }
}

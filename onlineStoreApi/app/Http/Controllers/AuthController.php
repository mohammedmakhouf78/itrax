<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiResponseTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiResponseTrait;
    public function register(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        if($validations->fails())
        {
            return $this->apiResponse(400,
                "validation error",$validations->errors());
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $this->apiResponse(200, "User created");
    }

    public function login(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validations->fails())
        {
            return $this->apiResponse(400,
                "validation error",$validations->errors());
        }

        $cred = $request->only('email','password');

        if($token = Auth::attempt($cred))
        {
            return $this->respondWithToken($token);
        }

        return $this->apiResponse(400, 'not found');
    }

    protected function respondWithToken($token)
    {
        $array = [
            'access_token' => $token,
        ];

        return $this->apiResponse(200, 'login', null, $array);
    }
}

<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AuthInterface;
use App\Http\Traits\ApiTrait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRepository implements AuthInterface
{
    use ApiTrait;

    public function register($request)
    {
        $validations = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        if($validations->fails())
        {
            return $this->apiResponce(400,"validation error",$validations->errors());
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]); 
        return $this->apiResponce(200,"account was created");
    }



    public function login($request)
    {
        $validations = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required|min:3'
        ]);

        $userData = $request->only('email','password');

        if($token = Auth::attempt($userData))
        {
            return $this->respondWithToken($token);
        }
        else
        {
            return $this->apiResponce(400,"wrong credentials");
        }
    }

    protected function respondWithToken($token)
    {
        $array =[
            'access_token' => $token,
            // 'expires_in' => auth()->factory()->getTTL() * 60
        ];
        return $this->apiResponce(200,"logged in",null,$array);
    }
}
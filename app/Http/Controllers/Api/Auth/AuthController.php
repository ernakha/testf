<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller\Api\Auth\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        if($validator->fails()){
            return $this->sendError('validator Error', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken("AuthToken")->accessToken;
        $success['account'] = $user;
        return $this->sendResponese($success, 'Account created successfully!!!');
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->get('email'),'password'=>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken("AuthToken")->accessToken;
            $success['user'] = $user;

            return $this->sendResponese($success, 'You are logged in');
        }
        else{
            return $this->sendError('UnAuthenticated', ['error' => 'UnAuthorized..']);
        }
        
    }
}

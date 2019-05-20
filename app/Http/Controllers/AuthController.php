<?php

namespace App\Http\Controllers;

use Validator;
use Hash;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request){
    	$validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('')->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('profile');
        }
    }
    
    public function register(Request $request){

    	$validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('')->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('profile');
        }
    }

    public function logout(Request $request){}
}

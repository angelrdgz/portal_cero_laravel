<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	return view('portal');
    }

    public function universes(){
    	return view('universes');
    }

    public function designers(){
    	return view('designers');
    }

    public function login(){
    	return view('login');
    }

    public function details(){
    	return view('details');
    }

    public function profile(){
        return view('profile');
    }
}

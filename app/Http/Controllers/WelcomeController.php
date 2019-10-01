<?php

namespace App\Http\Controllers;

use Auth;
use Cart;
use App\Genere;
use App\Interest;
use App\User;
use App\UserInterest;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	return view('portal');
    }

    public function contact(){
    	return view('contact');
    }

    public function universes(){
    	return view('universes');
    }

    public function allies(){
    	return view('allies');
    }

    public function creators(){
    	return view('creators');
    }

    public function designers(){
    	return view('designers');
    }

    public function login(){
    	return redirect('/');
    }

    public function details(){
    	return view('details');
    }

    public function cart(){
        $total = 0;
        return view('cart', ['total'=>$total]);
    }

    public function profile(){
        if(Auth::check()){
          redirect('universes');
        }
        $user = User::find(Auth::user()->id);
        $months = ['','Enero', 'Febrebro','Marzo', 'Abril','Mayo', 'Junio','Julio', 'Agosto','Septiembre', 'Octubre','Noviembre', 'Diciembre'];
        $birthday = explode('-', Auth::user()->birthday);
        $generes = Genere::all();
        $interests = Interest::all();
        return view('profile', ['birthday'=>$birthday, 'months'=>$months, 'generes'=>$generes, 'interests'=>$interests]);
    }

    public function updateProfile(Request $request){
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->birthday = $request->year.'-'.$request->month.'-'.$request->day;
        $user->genere_id = $request->genere;

        if(!is_null($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $user->interests()->delete();

        if(!is_null($request->interests)){
            foreach ($request->interests as $key => $inter) {
                $interest = new UserInterest();
                $interest->user_id = $request->user_id;
                $interest->interest_id = $inter;
                $interest->save();
            }
        }

        return redirect('profile');
    }
}

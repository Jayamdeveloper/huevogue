<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class Google extends Controller
{
    public function index(){

      return Socialite::driver('google')->redirect();
    }

    public function callback(){

      try{

        $user = Socialite::driver('google')->user();
        $existingUser = User::where('email', $user->email)->first();
//params - name,email,avatar,user.name,user.given_name,user.family_name,user.picture,user.verified_email
      if($user){
            Session::put('user_id', $user->id);
            Session::put('user_email', $user->email);
            Session::put('user_name', $user->name);
            Session::put('user_image', $user->avatar);

            if (!$existingUser) {
              User::create(['email'=> $user->email,'name'=> $user->name]);
            }

            return redirect()->route('home')->with('success','Login is Successfull');
      }

      }catch(Exception $e){

      }
    }
}
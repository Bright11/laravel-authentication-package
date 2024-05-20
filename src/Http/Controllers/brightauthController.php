<?php

// namespace App\Http\Controllers;
namespace Brightweb\Authentication\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class brightauthController extends BaseController
{
    //

    public function register(Request $req)
    {
        if($req->isMethod('post'))
        {
            $validator = $req->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                // 'password_confirmation' => 'min:6'
            ]);
        User::create([
            'name'=> $req->name,
            'email'=> strtolower($req->email),
            'password'=> bcrypt($req->password)
        ]);
            return redirect()->route('login')->with('success', 'Registration Successful');

        }
        return view('brightauth::auth.register');
    }

    public function login(Request $req)
    {
        if($req->isMethod('post'))
        {
            $validator = $req->validate([
                'email' => 'required|string|email',
                'password' => 'min:6|required',

            ]);


            if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
                $req->session()->regenerate();
               $user=Auth::user();
               if($user->role=='user'){
                return redirect('/');
               }elseif($user->role=='admin'){
                return redirect()->route('dashboard');
               }
               }

               return redirect()->back()->with('error','Incorrect password or email');
        }
        return view('brightauth::auth.login');
    }
    public function dashboard(){
        return view('brightauth::auth.dashboard');
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
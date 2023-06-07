<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //show login page
    public function showLogin()
    {
        return view('pages.login');
    }

    //show login page
    public function showRegister()
    {
        return view('pages.register');
    }

    //Register
    public function postRegister(Request $request)
    {
        //validation
        $request->validate([

            'name'=>'required|min:5|max:255',
            'email'=>'required|max:255|unique:users',
            'password'=>'required|min:8|max:15|confirmed'
        ]);

        //registration
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password), 
        ]);

       //login
       Auth::login($user);
       return back()->with('success','Successfully Logged In!!');
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return back();
    }

   //login user
   public function postLogin(Request $request)
   {
       //Validate
       $details = $request->validate([
           'email'=>'required|email',
           'password'=>'required'
       ]);

       if(Auth::attempt($details))
       {
           return redirect()->intended('/');
       }

        return back()->withErrors([
           'email'=>'Invalid Login Details'
       ]);
    }
}


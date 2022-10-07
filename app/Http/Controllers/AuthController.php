<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //show signup form 
    public function RegisterForm(){
        return view('users.register');
    }

    public function CreateUser(Request $request){

        //Referral logic
       //https://dev.to/simioluwatomi/let-s-build-a-super-simple-referral-system-with-laravel-1o3h

       
      $formFields = $request->validate([
          'name' => ['required', 'min:3'],
          'email' => ['required', 'email', Rule::unique('users', 'email')],
          'password' => 'required|confirmed|min:6'
      ]);
      
      //Hash passowrd
      $formFields['password'] = bcrypt($formFields['password']);
      
      //Create user
      $user = User::create($formFields);

      auth() ->login($user);
      
      Session::flash('message', 'created and logged in'); 
      Session::flash('background', 'bg-success'); 

      return redirect('/');

    }

    //Show login form
    public function LoginForm(){
        return view('users.login');
    }

    // Authenticate User (Login)
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields,request()->filled('remember'))) {
            $request->session()->regenerate();
            
            Session::flash('message', 'You are now logged in!'); 
            Session::flash('background', 'bg-success bg-gradient'); 

            return redirect('/dashboard');
        }
        
        //the error code below does not tell if whether it is email or passoword is incorrect
        //telling the user which one is a security risk
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        Session::flash('message', 'You have been logged out!'); 
        Session::flash('background', 'bg-info bg-gradient'); 

        return redirect('/login');

    }

}

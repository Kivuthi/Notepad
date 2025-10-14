<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login (){
        return view("auth.login");
    }

    public function registerPost (Request $request) {
        $validated = $request->validate([
            "email"=> "required",
            "password"=> "required | confirmed",
            "phone"=> "required",
            "name" => "required",

            ]);

            if ($validated) {
                if ($validated["password"] !== "password">=6) {
                    return back()->with("error", "Password should be at least 6 characters");
                }
                else {
                $validated['password']=Hash::make($validated['password']);
                User ::create($validated);
                return redirect()->route('auth.login')->with('success','Account Created Successfully');
                }
            } else {
                return back()->with("error","Invalid Input");
            } 


    }

    public function register () {
        return view("auth.register");
    }

    public function loginPost (Request $request) {
        $validated = $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        if ($validated) {
            $user = User::where ("email", $validated["email"])->first();
            if ($user) {

                if (Hash::check($validated["password"], $user->password)) {

                    auth()->login($user);
                    return redirect()->route("dashboard")->with("success","Success");
                }
                else {
                    return back()->with("error","Wrong Password");
                }
            }
            else {
                return back()->with("error","User not found");
            }
            
        }
    }

    public function logout () {
        auth()->logout();
        return redirect()->route("login")->with("success","You've been logged out");
    }
}

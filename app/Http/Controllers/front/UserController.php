<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register_view()
    {
        return view('front.register.index');
    }

    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'string|max:255|required',
            'email' => 'string|max:255|unique:users|email|required',
            'password' => 'string|min:8|required|confirmed'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors("failed", "Register failed some reason")->withInput();
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'slug' => str_replace(' ', '_', strtolower($request->name))
            ]);
            return redirect()->route('home')->with("success", "register succesfully");
        } catch (\Error $e) {
            return redirect()->back()->with("failed", "Register failed for some reason " . $e->getMessage());
        }
    }

    public function login_view()
    {
        return view('front.login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
            return redirect()->back()->withErrors(["email" => "The provided credentials do not match our record"])->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Some login error " . $e->getMessage())->withInput();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}

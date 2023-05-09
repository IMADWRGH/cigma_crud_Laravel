<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login()
    {
        return view('Login.login');
    }
    public function registration()
    {
        return view('Login.registration');
    }
    public function LoginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'pwd' => 'required',
        ]);
        $credentials = $request->only('email', 'pwd');
        if (Auth::attemp($credentials)) {
            return Redirect('login.registration')->with('success', 'Login are  valide');
        }
        return Redirect(route('login'))->with('error', 'Login are not valide');
    }
    public function RegistrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'pwd' => 'required',
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['pwd'] = FacadesHash::make($request->pwd);
        $user = User::create($data);
        if (!$user) {
            return Redirect(route('registration'))->with('error', 'Registration Fail');
        }
        return Redirect(route('login'))->with('success', 'Registration success');
    }
    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect(route('login'));
    }
}

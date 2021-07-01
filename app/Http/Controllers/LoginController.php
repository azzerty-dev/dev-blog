<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function loginCheck(){
        if (Auth::check()){
            return redirect(route('dashboard'));
        }

       return view('admin.login');
    }

    public function login(RegisterRequest $request){
        $formFields = $request->only(['email', 'password']);

        if (Auth::attempt($formFields)){
            return redirect()->intended('dashboard');
        }

        return redirect(('login'))->withErrors([
            'email' => 'не удалось авторизоваться',
        ]);
    }
}

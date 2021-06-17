<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){

        if (Auth::check()){
            return redirect(route('dashboard'));
        }

        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create($validateFields);
        if ($user){
            Auth::login($user);
            return redirect(route('dashboard'));

        }

        return redirect(route('login'))->withErrors([
            'FormError' => 'Произошла ошибка при сохранении пользователя'
        ]);

    }
}

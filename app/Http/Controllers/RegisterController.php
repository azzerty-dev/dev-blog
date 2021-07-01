<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function registerCheck(){
        if (Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('admin.register');
    }


    public function register(RegisterRequest $request){

        if (Auth::check()){
            return redirect(route('dashboard'));
        }

        $validateFields = $request->all();

        if (User::where('email', $validateFields['email'])->exists()){
           return redirect(route('register'))->withErrors([
                'email' => 'Такой пользователь уже существует'
            ]);
        }

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

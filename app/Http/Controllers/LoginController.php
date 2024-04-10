<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Mail\Message;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;


class LoginController extends Controller
{
    // create form
    public function create(){
        return view("login.create");
    }

    // create user
    public function store(Request $request) {
        $data = request()->validate([
            "login"=> "required|string",
            "password"=> "required|string"
        ]);

        $user = User::where([['login', $data['login']],['password', $data['password']]]);

        if ($user->count() == 0) {
            return redirect()->route('login.create')->with('message', 'Пароль твой - лажа');
        }
        
        $request->session()->put('login', $data['login']);

        return redirect()->route('users.index');
    }
}

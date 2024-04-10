<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mockery\Undefined;

class RegistrationController extends Controller
{
    
    // create form
    public function create(){
        return view("reg.create");
    }

    // create user
    public function store(){
        $data = request()->validate([
            "login"=> "required|string",
            "password"=> "required|string",
            "passwordConfirm"=>"required|string",
            "iWannaBeASlave"=> ""
        ]);

        if (User::where('login', $data['login'])->count() > 0)
        {
            return redirect()->route('reg.create')->with('error', 'Такой логин уже занят');
        }

        if ($data['password'] != $data['passwordConfirm'])
        {
            return redirect()->route('reg.create')->with('error', 'Пароли не совпадают');
        }

        if (!isset($data['iWannaBeASlave']))
        {
            return redirect()->route('reg.create')->with('error', 'Вы не согласны на вечный труд');
        }

        User::create(['login'=>$data['login'], 'password'=>$data['password']]);
        return redirect()->route('users.index');
    }
}

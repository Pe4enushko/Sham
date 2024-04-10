<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view("users.index", compact("data"));
    }
    public function show(Request $request) {
        $user = User::where('login', $request['login'])->first();
        
        return view('users.show', compact('user'));
    }

    public function edit(Request $request) {
        $user = User::where('login', $request->session()->get('login'));
        return view('users.edit', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $data = Gender::where('name','Мужской')->first();
        dump($data->users);
    }
}

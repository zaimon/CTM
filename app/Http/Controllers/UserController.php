<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function login($user ,$pass )
    {
        return view('index', ['user' => User::findOrFail($id)]);
    }
}

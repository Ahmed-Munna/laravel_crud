<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class customUserController extends Controller
{
    public function signup() {
        return view('auth.signup');
    }
    public function signin() {
        return view('auth.signin');
    }
    public function store(Request $request) {
        $info = $request->all();

        users::create([
            'name' => $info['name'],
            'email' => $info['email'],
            'password' => Hash::make($info['pass']),
        ]);
        return back();
    }
}

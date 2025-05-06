<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function login(Request $request)
    {
        $user = $request->input('username');
        $password = $request->input('password');
        if ($user == 'nabila123' && $password == '123456') {
            $userData = [
                'username' => $user,
                'password' => $password,
                'name'=>'Nabila',
                'email'=>'nabila@example.com',
                'no_hp'=>'08123456789',
            ];
            session(['userData' => $userData]);;
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
}

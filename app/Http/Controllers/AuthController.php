<?php

namespace App\Http\Controllers;

use App\User;
use App\Backend;
use Illuminate\Http\Request;
use App\Exceptions\User\WrongCredentialsException;

class AuthController extends Controller
{
    public function ShowAuthForm()
    {
        return view('auth/login', [
        'message' => session('login-error')
      ]);
    }

    public function ProcessLogin(Backend $backend, Request $request)
    {
        try {
            User::login($backend, $request->all());
        } catch (WrongCredentialsException $e) {
            $request->session()->flash('login-error', 'Wrong сredentials data');
            return redirect('/appercode/login/');
        }

        return redirect('/appercode/');
    }
}

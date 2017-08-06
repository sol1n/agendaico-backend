<?php

namespace App\Http\Controllers;

use App\User;
use App\Backend;
use Illuminate\Http\Request;
use App\Exceptions\User\WrongCredentialsException;

class SiteController extends Controller
{

    public function ShowIndex(Backend $backend, Request $request)
    {
        return view('site/page');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function login(Request $request)
    {
        var_dump($request->all());
    }
}

<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
        return view('clients.login')->with('title', 'Login | Game Store');
    }
}

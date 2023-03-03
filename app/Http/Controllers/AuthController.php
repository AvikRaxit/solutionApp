<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // View login page
    public function index() {
        return view('login');
    }
}

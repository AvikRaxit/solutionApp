<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;

class DashboardController extends Controller
{
    public function index() {
        $data = UserDetails::where('id',session()->get('loginId')->id)->first();
        return view('admin.dashboard', compact('data'));
    }
}

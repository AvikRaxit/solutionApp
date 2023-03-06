<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
class AuthController extends Controller
{
    // View login page
    public function index() {
        return view('login');
    }

    // Login success or fail
    public function successOrFailLogin(Request $request) {
        $user = UserDetails::where('user_id','=',$request->user_id)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                if($user->role == 1) {
                    $request->session()->put('loginId', $user);
                    return redirect()->route('dashboard');
                }
            }
            else{
                Alert::error('Error', 'Wrong Username and Password');
                return redirect()->back();
            }
        }
        else {
            Alert::error('Error', 'Username is not exist');
            return redirect()->back();
        }   
    }

    // Successfully logout
    public function logout() {
        session()->forget('loginId');
        // Toastr::success('Logout Successful', 'Success');
        return redirect()->route('login');
    }

    // Forgot password view
    public function forgotPassword() {
        return view('forgot_password');
    }
}

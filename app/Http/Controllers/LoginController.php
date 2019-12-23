<?php

namespace App\Http\Controllers;

use App\Pc;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function checklogin(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if (Auth::attempt($user_data))
        {
            $pcs = Pc::all();
            return view('index',compact('pcs'));
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successlogin()
    {
        return view('successlogin');
    }

    function logout() {
        Auth::logout();
        return redirect('login');
    }
}

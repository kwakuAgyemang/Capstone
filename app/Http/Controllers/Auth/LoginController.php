<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){

        return view('auth.login');
    }

    public function __construct()
    {
        $this->middleware(['guest']);
    }


    function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login Details');
        }
        return redirect()->route('dashboard');

    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){

        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //dd($request->only('email', 'password'));

        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }
        if(auth()->user()->user_role === 0){
            return redirect()->route('collector');
        }
        $data = DB::table('users')->where('user_role', 0)->get();
        //redirecting

        return redirect()->route('dashboard');
    }
}

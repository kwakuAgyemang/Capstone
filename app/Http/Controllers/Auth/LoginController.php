<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
        $this->middleware(['guest:collector']);
    }


    public function index(){

        return view('auth.login');
    }
    /**
     * Loggin in a User
     */
    public function storeUser(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $creds = $request->only('email', 'password');

        if(!Auth::attempt($creds)) {
            return back()->with('status', 'Invalid login details');
        }


        //redirecting

        return redirect()->route('user.home');
    }

    /**
     * Loggin in a Collector
     */
    public function storeCollector(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::guard('collector')->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        //redirecting

        return redirect()->route('collector.profile');
    }
}

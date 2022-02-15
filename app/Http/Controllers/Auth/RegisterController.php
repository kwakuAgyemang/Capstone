<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);
        //store the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'user_role' => $request->user_role,
            'password' => Hash::make($request->password),
        ]);
        //sign in
        auth()->attempt($request->only('email', 'password'));
        //redirecting
        return redirect()->route('dashboard');
    }
}

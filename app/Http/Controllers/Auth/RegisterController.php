<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Collector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }

    public function storeUser(Request $request){
        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone_num' => 'required',
            'password' => 'required|confirmed',

        ]);
        //store the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'password' => Hash::make($request->password),
        ]);
        //sign in
        auth()->attempt($request->only('email', 'password'));
        //redirecting
        //$data = DB::table('users')->where('user_role', 0)->get();

        return redirect()->route('dashboard.user.home');
    }

    public function storeCollector(Request $request){
        //validation
        $this->validate($request, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'vehicle_num' => 'required|max:12',
            'password' => 'required|confirmed',

        ]);
        if($request->hasFile('profile_pic')){
            $destination_path = 'public/images/';
            $image = $request->file('profile_pic');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('profile_pic')->storeAs($destination_path, $image_name);


        }
        //store the user
        Collector::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'vehicle_num' => $request->vehicle_num,
            'profile_pic' =>$image_name,
            'password' => Hash::make($request->password),
        ]);
        //sign in
        //if(!auth()->collector()->attempt($request->only('email', 'password'))){
            //return back()->with('Error', 'Invalid Credentials');
        //}
        //redirecting
        //$data = DB::table('co')->where('user_role', 0)->get();

        return redirect()->route('collector.home');
    }
}

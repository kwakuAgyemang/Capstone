<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Areas;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Redirects to the profile page
     */
    public function index()
    {
        $data = Areas::with('user')->get();
        return view('dashboard.user.profile', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'phone_num' => 'required',
            'area' => 'required'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_num = $request->phone_num;
        $user->area = $request->area;
        $user->save();

        return redirect()->route('user.profile');
    }

}

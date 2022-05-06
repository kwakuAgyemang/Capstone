<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Areas;

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

        ]);
    }

}

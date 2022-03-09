<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointments;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){

        //$data = Appointments::where('user_id', auth()->user()->id)->with('user')->orderBy('created_at')->get();
        //dd($data);
        return view('dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        //$arr_ip = geoip()->getLocaton($_SERVER['REMOTE_ADDR']);
        //dd($arr_ip);
        return view('dashboard');
    }
}

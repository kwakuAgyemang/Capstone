<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function store(){
        auth()->logout();
        return redirect()->route('home');
    }

    public function storeCollector(){
        Auth::guard('collector')->logout();
        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointments;
use App\Models\Collector;
use App\Models\AreaCollection;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Redirects to the dashboard
     */
    public function index()
    {
        $data = AreaCollection::with('collector')->where('area_id',auth()->user()->area)->get();
        return view('dashboard.user.home', [
            'data' => $data
        ]);
    }
}

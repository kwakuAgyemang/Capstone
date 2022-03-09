<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointments;
use Carbon\Carbon;

class CollectorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $data = Appointments::where('collector_id', auth()->user()->id)->with('user')->get();
        //dd($data);
        $date = Carbon::now();
        $data1 = Appointments::where('collector_id', auth()->user()->id)->where('date', $date->toDateString())->with('user')->get();
        return view('collector', [
            'data' => $data,
            'data1' => $data1
        ]);
    }


}

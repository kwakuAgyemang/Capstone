<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Report;
use App\Model\Collector;
use App\Models\AreaCollection;

class ReportController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $collector = AreaCollection::with('collector')->where('area_id',auth()->user()->area)->get();;
        return view('dashboard.user.report', [
            'collector' => $collector
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id'      => 'required',
            'collector_id' => 'required',
            'report'       => 'required'
        ]);

        Report::create([
            'user_id'      => auth()->user()->id,
            'collector_id' => $request->collector_id,
            'report'       => $request->report,
            ]);

        return redirect()->route('user.home');
    }
}

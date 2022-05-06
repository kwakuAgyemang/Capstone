<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Collector;
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


    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
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

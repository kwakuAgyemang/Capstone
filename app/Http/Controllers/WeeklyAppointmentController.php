<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeeklyAppointment;
use App\Models\AreaCollection;
use DB;

class WeeklyAppointmentController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     *
     */
    public function index(){
        $data = AreaCollection::with('collector')->where('area_id',auth()->user()->area)->get();
        return view('dashboard.user.weeklyappointments', [
            'data' => $data
        ]);
    }

    /**
     * Creating a new WeeklyAppointment
     */
    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
            'day_of_week' => 'required',
            'collector_id' => 'required',
            'house_number' => 'required|max:255',
            'user_id' => 'required',
            'landmark' => 'required',
        ]);


        //store the weekly appointment
        WeeklyAppointment::create([
            'day_of_week' => $request->day_of_week,
            'collector_id' => $request->collector_id,
            'house_number' => $request->house_number,
            'user_id' => $request->user_id,
            'landmark' => $request->landmark,
            'status' => 'PENDING',

        ]);




        return redirect()->route('user.home');
    }

    // public function getToday(){

    // }
}

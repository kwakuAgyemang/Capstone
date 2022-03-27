<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeeklyAppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        $data = DB::table('collectors')->get();
        return view('dashboard.user.weeklyappointments', [
            'data' => $data
        ]);
    }


    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
            'day_of_week' => 'required',
            'collector_id' => 'required',
            'house_number' => 'required|max:255',
            'user_id' => 'required',
            'landmark' => 'required',
        ]);

        //dd($request->date);
        //$day = Carbon::createFromFormat('Y-m-d', $request->day_of_week)->format('l');


        //store the appointment
        Appointments::create([
            'day_of_week' => $request->day_of_week,
            'collector_id' => $request->collector_id,
            'house_number' => $request->house_number,
            'user_id' => $request->user_id,
            'landmark' => $request->landmark,
            'status' => 'PENDING',

        ]);




        return redirect()->route('user.home');
    }
}

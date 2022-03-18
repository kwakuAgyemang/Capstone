<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        $data = DB::table('collectors')->get();
        return view('dashboard.user.appointments', [
            'data' => $data
        ]);
    }


    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
            'date' => 'required',
            'collector_id' => 'required',
            'regularity' => 'required',
            'house_number' => 'required|max:255',
            'user_id' => 'required',
            'landmark' => 'required'
        ]);

        //store the appointment
        Appointments::create([
            'date' => $request->date,
            'collector_id' => $request->collector_id,
            'regularity' => $request->regularity,
            'house_number' => $request->house_number,
            'user_id' => $request->user_id,
            'landmark' => $request->landmark,
            'status' => 'PENDING'
        ]);




        return redirect()->route('user.home');
    }


}

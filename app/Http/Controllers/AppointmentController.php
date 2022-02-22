<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AppointmentController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'date' => 'required',
            'collectors' => 'required',
            'schedule' => 'required',
            'house_number' => 'required|max:255',
            'user_id' => 'required',
            'landmark' => 'required'
        ]);
        //store the user
        Appointments::create([
            'date' => $request->date,
            'collectors' => $request->collectors,
            'schedule' => $request->schedule,
            'house_number' => $request->house_number,
            'user_id' => $request->user_id,
            'landmark' => $request->landmark,
        ]);
    }

    public function list(){

    }
}

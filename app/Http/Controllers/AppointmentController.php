<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Collector;
use App\Models\AreaCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AppointmentController extends Controller
{

    /**
     * User Authentication
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Redirecting to the appointments page
     */
    public function index(){
        $data = AreaCollection::with('collector')->where('area_id',auth()->user()->area)->get();
        //dd($data);
        return view('dashboard.user.appointments', [
            'data' => $data
        ]);
    }

    /**
     * Creating a new Appointment
     */
    public function store(Request $request){
        $this->validate($request, [
            'date' => 'required',
            'collector_id' => 'required',
            'house_number' => 'required|max:255',
            'user_id' => 'required',
            'landmark' => 'required',
        ]);
        $day = Carbon::createFromFormat('Y-m-d', $request->date)->format('l');


        //store the appointment
        Appointments::create([
            'date' => $request->date,
            'collector_id' => $request->collector_id,
            'house_number' => $request->house_number,
            'user_id' => $request->user_id,
            'landmark' => $request->landmark,
            'status' => 'PENDING',
        ]);


        //redirect to the user's home page
        return redirect()->route('user.home');
    }


}

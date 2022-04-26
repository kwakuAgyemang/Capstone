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



        $date = Carbon::now();
        $date =  $date->toDateString();
        $app = Appointments::where('date', $request->date)->with('user')->get();

        $curl = curl_init();
        foreach($app as $appointments){
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://sms.arkesel.com/api/v2/sms/send',
            CURLOPT_HTTPHEADER => ['api-key: cE9QRUkdjsjdfjkdsj9kdiieieififiw='],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'sender' => 'AbobyaExpress',
                'message' => 'Name: '.$appointments->user->name.'
                              Landmark:  '.$appointments->landmark.'
                              Phone Number:'.$appointments->collector->phone_num,
                'recipients' => $appointments->collector->phone_num,
            ]),
        ]);
    }

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;






    }

    // public function getToday(){

    // }
}

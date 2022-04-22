<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointments;
use App\Models\WeeklyAppointment;
use Carbon\Carbon;

class CollectorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        //Getting one time appointment whose due dates have not reached
        $data = Appointments::where(array(
            'collector_id' =>auth()->user()->id,
            ['date', '>', Carbon::now()]))
            ->with('user')
            ->get();

        //Today's date
        $date = Carbon::now();
        $date = $date->toDateString();

        //Day of the week
        $day = Carbon::createFromFormat('Y-m-d', $date)->format('l');

        //Getting all the collector's one time appointments due today
        $data1 = Appointments::where('collector_id', auth()->user()->id)->where('date', $date)->with('user')->get();

        //Getting all the collector's weekly appointments due today
        $data2 = WeeklyAppointment::where(array(
            'day_of_week'  => $day,
            'collector_id' => auth()->user()->id
        ))
        ->get();

        return view('dashboard.collector.home', [
            'data'   => $data,
            'data1'  => $data1,
            'data2'  => $data2,

        ]);
    }

    /**
     * Getting all weekly appointments of the collector
     */
    public function allWeekly(){
        $weekly = WeeklyAppointment::where('collector_id', auth()->user()->id)->get();

        return view('dashboard.collector.allWeekly', [
            'weekly' => $weekly
        ]);
    }

    /**
     * Getting all appointments of the collector
     */
    public function allOne(){
        //
        $oneTime = Appointments::where('collector_id', auth()->user()->id)->get();
        return view('dashboard.collector.allone', [
            'oneTime' => $oneTime
        ]);
    }




}

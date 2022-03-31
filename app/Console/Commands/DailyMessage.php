<?php

namespace App\Console\Commands;
use DB;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Appointments;
use App\Models\WeeklyAppointments;

class DailyMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan comman to send daily messages';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info('Working');
    }

    public function getOneTimeApp(){
        $date = Carbon::now();
        $appointments = Appointments::where('date', $date)->get();
    }

    public function getWeeklyApp(){
        $date = Carbon::now();
        $day = Carbon::createFromFormat('Y-m-d', $date)->format('l');
        $appointments = WeeklyAppointments::where('Day_of_week', $day)->get();
    }
}

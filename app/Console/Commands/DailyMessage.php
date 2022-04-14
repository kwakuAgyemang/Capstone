<?php

namespace App\Console\Commands;
use DB;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Appointments;
use App\Models\Collector;
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


    public function Arkesel(){
        $numbers = Appointments::where('collector_id', auth()->user()->id)->where('date', $date)->with('user')->get();
        foreach($numbers as $appointments){


        // SCHEDULE SMS
        $curl = curl_init();

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
                'message' => '',
                'recipients' => '',
                'scheduled_date' => '2021-03-17 07:00 AM'
            ]),
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

        // $curl = curl_init();

        // curl_setopt_array($curl, [
        //     CURLOPT_URL => 'https://sms.arkesel.com/api/v2/sms/send',
        //     CURLOPT_HTTPHEADER => ['api-key: cE9QRUkdjsjdfjkdsj9kdiieieififiw='],
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => http_build_query([
        //         'sender' => 'Helloworld',
        //         'message' => 'Welcome to Arkesel SMS API v2. Please enjoy the experience.',
        //         'recipients' => ['233542336719', '233268155768']
        //     ]),
        // ]);

        // $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;

    }
}

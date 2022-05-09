<?php

namespace App\Console\Commands;
use DB;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Appointments;
use App\Models\Collector;
use App\Models\WeeklyAppointment;

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
        $this->Arkesel();
    }

    public function getOneTimeApp(){
        $date = Carbon::now();
        $date =  $date->toDateString();
        $appointments = Appointments::where('date', $date)->with('user')->get();
    }

    public function getWeeklyApp(){
        $date = Carbon::now();
        //$day = Carbon::createFromFormat('Y-m-d', $date)->format('l');

        $day = Carbon::parse($date)->dayName;
        $appointments = WeeklyAppointment::where('Day_of_week', $day)->with('user')->get();
    }


    public function Arkesel(){
        $app = $this->getOneTimeApp();
        $weeklyApp = $this->getWeeklyApp();
        if($app != null){
            foreach($app as $appointments){


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
                    'message' => 'Name: '.$appointments->user->name.'
                                Landmark:  '.$appointments->landmark.'
                                Area: '.$appointments->user->area.'
                                Phone Number:'.$appointments->collector->phone_num,
                    'recipients' => $appointments->collector->phone_num,
                ]),
            ]);

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;
            }
        }
        if($weeklyApp !== null){
            foreach($weeklyApp as $w){
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
                        'message' => 'Name: '.$w->user->name.'
                                    Landmark:  '.$w->landmark.'
                                    Area: '.$w->user->area.'
                                    Phone Number:'.$w->collector->phone_num,
                        'recipients' => $w->collector->phone_num,
                    ]),
                ]);

                $response = curl_exec($curl);

                curl_close($curl);
                echo $response;
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collector;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ApiController extends Controller
{
    function direct(Request $request){
        $arg = [[
                $request->cLong,
                $request->cLat,
            ],[
                $request->uLong,
                $request->uLat,
            ]
        ];
        $process = new Process(['python', 'app\Http\Controllers\script.py', $arg]);
        //$collectors = Collector::all();
        //return response()->json($collectors);

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output_data = $process->getOutput();
    }
}

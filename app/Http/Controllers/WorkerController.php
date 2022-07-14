<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Support\Facades\Cache;

class WorkerController extends Controller
{
    public function first()
    {
        $worker = Cache::remember('first', 10, function (){
            return Worker::select('*')->where('number', '=', 1015)->where('series', '=', 422269)->get();
        });

        dd($worker);
    }

    public function two()
    {
        $worker = Worker::select('*')->where('first_name', '=', 'Алексей')->where( 'birthday', '>', '1999-07-01')->get();

        dd($worker);
    }

}

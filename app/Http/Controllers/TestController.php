<?php

namespace App\Http\Controllers;
use App\Jobs\PubSubJob;
use DateTime;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function PubJob(){
        PubSubJob::dispatch(new DateTime())->onQueue(env('PUBSUB_DEFAULT_QUEUE'));
        return redirect('/')->with('success','Subscription done');
        //dispatch(new App\Jobs\PubSubJob())->onQueue(env('PUBSUB_DEFAULT_QUEUE'));
    }

    public function index(){
        return view('index');
    }
}

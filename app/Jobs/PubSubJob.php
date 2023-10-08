<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PubSubJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->onQueue(env('PUBSUB_DEFAULT_QUEUE'));

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        //Log::info("this job was processed by pub/sub.");
        Log::info("Job sent at ".$this->message->format('Y-m-d H:i:s'));
    }
}

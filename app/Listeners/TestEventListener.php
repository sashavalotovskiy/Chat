<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class TestEventListener implements ShouldQueue
{
    public $connection;

    public $queue = 'processing';
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->connection = config('queue.processing');
    }

    /**
     * Handle the event.
     *
     * @param  TestEvent  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        sleep(60);
        Log::emergency($event->msg);
    }
}

<?php

namespace App\Listeners;
use Log;

class TestEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function sendTest1($event)
    {
        Log::emergency('sendTest1=' . $event->msg);
    }

    /**
     * Handle user logout events.
     */
    public function sendTest2($event)
    {
        Log::emergency('sendTest2=' . $event->msg);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'App\Events\TestEvent',
            'App\Listeners\TestEventSubscriber@sendTest1'
        );

        $events->listen(
            'App\Events\TestEvent',
            'App\Listeners\TestEventSubscriber@sendTest2'
        );
    }

}
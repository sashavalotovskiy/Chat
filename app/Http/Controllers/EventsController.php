<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jobs\TestJob;
use Queue;
use App\Events\TestEvent;

class EventsController extends Controller
{
    public function index()
    {
        //dd(TestJob::dispatch(new TestJob())->onConnection(config('queue.processing')))->onQueue('processing');
        //TestJob::dispatch()->onConnection(config('queue.processing'))->onQueue('processing');
        event(new TestEvent('Hello word'));
        dd('ok');
    }
}

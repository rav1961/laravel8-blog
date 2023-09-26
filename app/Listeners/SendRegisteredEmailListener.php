<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Jobs\SendRegisteredEmail;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegisteredEmailListener implements ShouldQueue
{
    use InteractsWithSockets;

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        SendRegisteredEmail::dispatch($event->user);
    }
}

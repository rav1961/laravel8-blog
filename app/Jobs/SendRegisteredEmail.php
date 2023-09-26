<?php

namespace App\Jobs;

use App\Mail\RegisterUserMail;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendRegisteredEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithSockets, Queueable, SerializesModels;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle(): void
    {
        Mail::to($this->user->email)->send(new RegisterUserMail($this->user));
    }
}

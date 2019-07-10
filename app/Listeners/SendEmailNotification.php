<?php

namespace App\Listeners;

use App\Mail\UserLoggedIn;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered as RegisteredAlias;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //get user's log-in and email
        $email = $event->user->email;

        //send email notification to user about log-in -- I know it's not the best but well; we all gotta start from somewhere.
        Mail::to($email)->queue(
            new UserLoggedIn()
        );
    }
}

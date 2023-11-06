<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyUser
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
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        //
        $user = $event->user;
    //    dd($user);

        Mail::to($user)
            //->using('mailtrap')
            ->send(new WelcomeEmail());
    }
}

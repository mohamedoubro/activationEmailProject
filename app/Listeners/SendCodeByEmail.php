<?php

namespace App\Listeners;

use App\Events\ActivationCodeEvent;
use App\Mail\ActivationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendCodeByEmail
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
     * @param  ActivationCodeEvent  $event
     * @return void
     */
    public function handle(ActivationCodeEvent $event)
    {
        //


        Mail::to($event->user)->queue(new ActivationEmail($event->user->userActivationCode));



    }
}

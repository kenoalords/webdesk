<?php

namespace App\Mail;

use App\Model\Subscription;
use App\Model\User;
use App\Transformers\SubscriptionTransformer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionUpdateNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sub_id;

    public function __construct($sub_id)
    {
        $this->sub_id = $sub_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sub = fractal()->item(Subscription::find($this->sub_id))
                        ->transformWith(new SubscriptionTransformer)
                        ->toArray();
        $user = User::find($sub['user_id']);
        return $this->subject(ucwords(strtolower($user->fullname)) . ', ' . $sub['domain_name'] . ' is ' . $sub['progress'] . '% complete!')
                    ->markdown('email.subscription_update_notification')
                    ->with([
                        'user'  => $user,
                        'sub'   => $sub,
                    ]);
    }
}

<?php

namespace App\Mail;

use App\Model\Subscription;
use App\Model\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSubmitNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subscription_id;
    public $department;
    public $title;
    public $message;

    public function __construct($subscription_id, $department, $title, $message)
    {
        $this->subscription_id = $subscription_id;
        $this->department = $department;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Subscription $subscription, User $user)
    {
        $subscription = $subscription->find($this->subscription_id);
        $user = $user->find($subscription->user_id);

        $this->withSwiftMessage(function ($message) use ($user) {
            $message->getHeaders()
                    ->addTextHeader('Reply-To', $user->email);
        });
        return $this->subject('Contact Enquiry: ' . $subscription->domain_name)
                    ->markdown('email.contact_submit')
                    ->with([
                        'domain'    => $subscription->domain_name,
                        'department'=> $this->department,
                        'title'   => $this->title,
                        'message'   => $this->message,
                    ]);
    }
}

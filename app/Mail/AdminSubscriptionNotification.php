<?php

namespace App\Mail;

use App\Model\Invoice;
use App\Model\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminSubscriptionNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $invoice;
    public $subscription;

    public function __construct(Invoice $invoice, Subscription $subscription)
    {
        $this->invoice = $invoice;
        $this->subscription = $subscription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Subscription Notification for ' . $this->subscription->domain_name )
                    ->markdown('email.admin_subscription_notification');
    }
}

<?php

namespace App\Mail;

use App\Model\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Transformers\InvoiceTransformer;

class SubscriptionNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $invoice_id;

    public function __construct($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Invoice $invoice)
    {
        $details = fractal()->item($invoice->find($this->invoice_id))->transformWith(new InvoiceTransformer)->toArray();
        return $this->subject('Thank you for subscribing')
                    ->markdown('email.subscription_notification')
                    ->with('invoice', $details);
    }
}

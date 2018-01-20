<?php

namespace App\Mail;

use App\Model\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Transformers\InvoiceTransformer;

class InvoiceGenerationNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $invoice = fractal()->item(Invoice::find($this->id))
                            ->transformWith(new InvoiceTransformer())
                            ->toArray();
        return $this->subject($invoice['user']['fullname'].', You have a new invoice')
                    ->markdown('email.invoice_generation_notification')
                    ->with('invoice', $invoice);
    }
}

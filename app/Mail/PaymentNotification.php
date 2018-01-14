<?php

namespace App\Mail;

use App\Model\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Transformers\InvoiceTransformer;

class PaymentNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $invoice_id;
    public $payment_id;
    public $payment_reference;
    public $amount;

    public function __construct($invoice, $payment_id, $payment_reference, $amount)
    {
        $this->invoice_id = $invoice;
        $this->payment_id = $payment_id;
        $this->payment_reference = $payment_reference;
        $this->amount = $amount/100;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Invoice $invoice)
    {
        $details = fractal()->item($invoice->find($this->invoice_id))->transformWith(new InvoiceTransformer)->toArray();

        return $this->subject('Payment Summary (Invoice No: '.$details['id'].', Ref: '.$this->payment_reference.')')
                    ->markdown('email.payment_notification')
                    ->with([
                        'invoice'   => $details,
                        'ref'       => $this->payment_reference,
                        'id'        => $this->payment_id,
                        'amount'    => number_format( $this->amount ),
                    ]);
    }
}

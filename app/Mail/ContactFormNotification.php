<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $fullname;
    public $email;
    public $phone;
    public $title;
    public $message;

    public function __construct($fullname, $email, $phone, $title, $message)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->phone = $phone;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New pubic contact from enquiry from ' . $this->fullname)
                    ->markdown('email.contact_form_notification')
                    ->with([
                        'fullname'  => $this->fullname,
                        'email'  => $this->email,
                        'phone'  => $this->phone,
                        'title'  => $this->title,
                        'message'  => $this->message,
                    ]);
    }
}

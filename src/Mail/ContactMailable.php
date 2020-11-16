<?php

namespace AfzalSabbir\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $description;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($description, $name)
    {
        $this->description = $description;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['description' => $this->description, 'name' => $this->name]);
    }
}

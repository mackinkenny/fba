<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Report extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    public $email;
    public $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $email , $comment)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fba@wlc1.ru')->subject('Новая заявка с сайта!"
')->markdown('mail.send');
    }
}

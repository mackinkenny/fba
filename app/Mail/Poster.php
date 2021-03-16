<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Poster extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    public $email;
    public $poster;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $email , $poster)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->poster = $poster;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fba@wlc1.ru')->subject('Заявка на мероприятие!"
')->markdown('mail.poster');
    }
}

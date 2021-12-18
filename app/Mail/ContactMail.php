<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $tel, $text)
    {
        $this->name = $name;
        $this->email = $email;
        $this->tel = $tel;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("ポートフォリオからの問い合わせ")
            ->view("emails.contact")
            ->with([
                "name" => $this->name,
                "email" => $this->email,
                "tel" => $this->tel,
                "text" => $this->text,
            ]);
    }
}

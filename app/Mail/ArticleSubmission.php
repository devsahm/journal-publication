<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ArticleSubmission extends Mailable
{
    use Queueable, SerializesModels;
public $message;
public $subject;
public $name;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $subject, $name)
    {
        $this->message=$message;
         $this->subject=$subject;
         $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.mailing-article');
    }
}

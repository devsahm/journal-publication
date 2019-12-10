<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationCompletion extends Mailable
{
    use Queueable, SerializesModels;
public $summary;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($summary)
    {
        $this->summary=$summary;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.complete-apply');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;
    

    /**
     * Create a new message instance.
     * 
     * @return void
     */
        
    public $demo;
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('190103419@stu.sdu.edu.kz')
                    ->view('mails.demo_plain')
                    ->text('mails.demo_plain')
                    ->with('demo', $this->demo);
    }
}

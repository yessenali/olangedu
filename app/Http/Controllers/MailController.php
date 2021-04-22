<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->email = '190103419@stu.sdu.edu.kz';
        $objDemo->message = 'Hello';
        $objDemo->sender = 'Yessenali';
        $objDemo->receiver = 'Olang education';

        
        Mail::to("olangeducation@gmail.com")->send(new DemoEmail($objDemo));
    }
}

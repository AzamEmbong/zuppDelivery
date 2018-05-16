<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'],['name','Sarthak'],function($message){
            $message->to('azam.embong@gmail.com','To Azamthegreat')->subject('test email');
            $message->from('azam.embong@gmail.com','To Azamthegreat');
        });
    }

}

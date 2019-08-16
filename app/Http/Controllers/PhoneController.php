<?php

namespace App\Http\Controllers;

use Aloha\Twilio\Twilio;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function makeCall(){
        $t = new Twilio(env('TWILIO_ACCOUNT_SID'),env('TWILIO_AUTH_TOKEN'), env('TWILIO_NUMBER'));
        $t->call(env('MY_PHONE'), function ($message) {
            $message->say('Daddy!, I am crying!');
            $message->play('https://api.twilio.com/cowbell.mp3', ['loop' => 5]);
        });
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelTwilio\Facades\Twilio;

class TwilioController extends Controller
{
    public function sendMessage(Request $request)
    {
        if (! Twilio::isEnabled()) {
            return;
        }

        $to = $request->input('to');
        $message = $request->input('message');

        $result = Twilio::sendMessage($to, $message);

        return $result;
    }
}
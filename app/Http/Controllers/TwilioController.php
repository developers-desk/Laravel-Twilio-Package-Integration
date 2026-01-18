<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DevelopersDesk\LaravelTwilio\Facades\Twilio;

class TwilioController extends Controller
{
    public function sendMessage(Request $request)
    {
        if (! Twilio::isEnabled()) {
            return;
        }

        $to = $request->input('to');
        $message = $request->input('message');

        $result = Twilio::sms($to, $message);

        return $result;
    }

    public function sendWhatsapp(Request $request)
    {
        if (! Twilio::isEnabled()) {
            return;
        }

        $to = $request->input('to');
        $contentSid = $request->input('message');

        $result = Twilio::whatsapp(
            $to,
            $contentSid,
            [
                "2" => "17-January-2026",
                "3" => "9AM",
            ]
        );        

        return $result;
    }
}
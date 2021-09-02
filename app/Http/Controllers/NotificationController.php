<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("1f618ff9", "b7UUD8RoJKRhQXkI");
        $client = new \Vonage\Client($basic);

        /*
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("8801775239873", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
        */
        $message = $client->message()->send([
            'to' => '8801775239873',
            'from' => 'DEMO',
            'text' => 'A simple hello message sent from Vonage SMS API'
        ]);
        dd('SMS message has been delivered.');
 
    }
}

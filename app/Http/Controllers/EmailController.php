<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function email(Request $request){
        $this->validate($request, [
            'emailAddress' => 'required|email',
            'g-recaptcha-response' => 'required|string|min:1|max:10000',
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:30000'
        ]);

        $client = new \GuzzleHttp\Client();

        // Create a POST request
        $response = $client->request(
            'POST',
            'https://www.google.com/recaptcha/api/siteverify',
            [
               'form_params' => [
                   'secret' => config("custom.recaptcha_secret_key"),
                   'response' => $request->input('g-recaptcha-response'),
                   'remoteip' => $request->ip()
                ]
            ]
        );
 
        
        $g_response = json_decode($response->getBody());
        if (!$g_response->success) {
         return response("Invalid recaptcha token. Please try again.", 400);
        }

        Log::channel('email')->info(
            "Constructing email.\n" .
            '$name= ' . $request->name . "\n" .
            '$emailAddress= ' . $request->emailAddress . "\n" . 
            ' $message= ' . $request->message . "\n" .
            "----------------------------------------\n\n");
        
        Mail::to("andrewwilliamlaboy@gmail.com")->send(new Contact($request->name, $request->emailAddress, $request->message));
    }
}

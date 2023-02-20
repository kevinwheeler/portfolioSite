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
            'name' => 'required|string|max:255',
            'emailAddress' => 'required|email',
            'message' => 'required|string|max:30000'
        ]);

        Log::channel('email')->info(
            "Constructing email.\n" .
            '$name= ' . $request->name . "\n" .
            '$emailAddress= ' . $request->emailAddress . "\n" . 
            ' $message= ' . $request->message . "\n" .
            "----------------------------------------\n\n");
        
        Mail::to("kevinwheeler90@gmail.com")->send(new Contact($request->name, $request->emailAddress, $request->message));
    }
}

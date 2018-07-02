<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Utilities\Curl;

class ContactController extends Controller
{
    public function send(Request $request, Curl $curl)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'text' => 'required'
        ]);

        $response = json_decode($curl->post('https://www.google.com/recaptcha/api/siteverify', [
            'server' => config('services.recaptcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]));
        return $request->input('g-recaptcha-response');

        if (! $response->success) {
            abort(400, 'Recaptcha did not pass');
        }

        \Mail::to('test@test.com')->send(new Contact($request->toArray()));
    }
}

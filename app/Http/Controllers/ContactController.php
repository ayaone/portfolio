<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Utilities\Curl;
use Zttp\Zttp;


class ContactController extends Controller
{
    public function send(Request $request, Curl $curl)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'text' => 'required',
            'captcha'=> 'required'
        ]);

        // $this->validateRequest();


        $response = json_decode($curl->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->input('captcha'),
            'remoteip' => $request->ip()
        ]));


        if (! $response->success) {
            abort(400, 'Recaptcha did not pass');
        }
        \Mail::to('test@test.com')->send(new Contact($request->toArray()));
    }

    public function validateRequest()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'text' => 'required',
            'captcha'=> 'required'
        ]);
    }

}

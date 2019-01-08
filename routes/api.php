<?php

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

 Route::get('/slack', function (Request $request) {
     if (!$request->session()->get('in')) {
         define('SLACK_WEBHOOK', env('SLACK_HOCK'));
         $message = array('payload' => json_encode(array('text' => Auth::user()->name.' | '.Auth::user()->email.': Signed in')));
         // Use curl to send your message
         $c = curl_init(SLACK_WEBHOOK);
         curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($c, CURLOPT_POST, true);
         curl_setopt($c, CURLOPT_POSTFIELDS, $message);
         curl_exec($c);
         curl_close($c);
         $request->session()->put('in', 1);
     }
 });

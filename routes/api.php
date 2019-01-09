<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
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
     if (!session('in')) {
         define('SLACK_WEBHOOK', Config::get('nova-login-monitor.slack_hook'));
         $message = array('payload' => json_encode(array('text' => Auth::user()->name.' | '.Auth::user()->email.': Signed in')));
         // Use curl to send your message
         $c = curl_init(SLACK_WEBHOOK);
         curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($c, CURLOPT_POST, true);
         curl_setopt($c, CURLOPT_POSTFIELDS, $message);
         curl_exec($c);
         curl_close($c);
         session(['in' => 1]);
     }
 });

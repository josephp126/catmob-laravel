<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Artisan;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session, Storage;

use Notification;
use Mail;

use App\Notifications\MyFirstNotification;

use App\Http\Requests;
use App\Models\Properties;

class Start_landing_page extends Controller
{
    public function index()
    {
        return view('auth.login');    
    }

    public function about(){
        return view('pages.contact');
    }

    public function properties(){
        return view('pages.properties');
    }

    public function courses(){
        return view('pages.courses');
    }

    public function profit(){
        return view('pages.profit');
    }
    
    public function general_search_2(Request $request){   
        $name = $request->name;
        $data['t_data']=$name;
        var_dump($data); die();
        //return redirect('/home');
        return view('pages.home');
    }

    public function clearCache() {
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('config:cache');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        $exitCode = Artisan::call('route:cache');
        $exitCode = Artisan::call('cache:clear');
        // return what you want
    }

    public function sendNotification()

    {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
           $message->to('eg9397314@gmail.com', 'Tutorials Point')->subject
              ('Laravel HTML Testing Mail');
           $message->from('linodeBp17@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
        // $to_email = "eg9397314@gmail.com";
        // $subject = "Simple Email Test via PHP";
        // $body = "Hi,nn This is test email send by PHP Script";
        // $headers = "From: linodeBp17@gmail.com";
        
        // if (mail($to_email, $subject, $body, $headers)) {
        //     dd("Email successfully sent to $to_email...");
        // } else {
        //     dd("Email sending failed...");
        // }
        // $user = User::first();
        // $details = [

        //     'greeting' => 'Hi Artisan',

        //     'body' => 'This is my first notification from ItSolutionStuff.com',

        //     'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',

        //     'actionText' => 'View My Site',

        //     'actionURL' => url('/'),

        //     'order_id' => 101

        // ];
        // Notification::send($user, new MyFirstNotification($details));
        // dd('done');
    }
        
}   


<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function basic_email(Request $request) {
        
       $details = array('email'=>$request->email,'name'=> $request->name,'message' => $request->message,'subject' => $request->subject);
       \Mail::to('antarctico.int@gmail.com')->send(new \App\Mail\ContactUs($details));
       return view('index');
     }
}

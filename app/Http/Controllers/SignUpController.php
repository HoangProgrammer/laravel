<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function index(){
        Mail::send('client.register',array('name' =>'HELLO'),function($email){
$email->subject('Forgot password');
$email->to('hoangnvph111111@gmail.com');
        });
    }
}

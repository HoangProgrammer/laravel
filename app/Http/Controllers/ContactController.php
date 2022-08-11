<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()
    {
        $contacts=Contact::select('*')->paginate(5);
        return view('server.contact.contact',compact('contacts'));
        # code...
    }

}

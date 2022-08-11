<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ContactClientController extends Controller
{
    //

    function index(ContactRequest $request)
    {
        
        $contact = new Contact();
        $contact->fill($request->all());
        $contact->time=date('Y-m-d H:i:s');
        if(!$contact){
            Alert::error('Gửi liện hệ thật bại');
        }else{
            Alert::success('Gửi liện hệ thành công');
            $contact->save();
        }
        return back();
        

    }
}

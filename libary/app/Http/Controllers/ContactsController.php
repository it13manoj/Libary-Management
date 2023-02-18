<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Contacts;

class ContactsController extends Controller
{
    public function sentMessage(Request $request){
        $contact = new Contacts();
        $contact->name = $request->form_name;
        $contact->email = $request->form_email;
        $contact->phone = $request->form_phone;
        $contact->subject = $request->form_subject;
        $contact->message = $request->form_message;
        $contact->save();
        session()->flash('message', 'Succefully send you message');
        return redirect()->back();
    }


    public function getContect(Request $request){
        $contact = Contacts::get();
        return view('Admin.View.Contact',compact('contact'));
    }
}

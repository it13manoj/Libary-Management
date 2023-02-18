<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Origination;
use App\Event;
use App\Home;

class EventController extends Controller
{
    public function upcoming(Request $request){
        $events = Event::with('Origination','Categories')->where('status','1')->orderBy("id",'Desc')->get();
            return view('Front.View.upcomming',compact('events'));
    }

    public function past(Request $request){
        $events = Event::with('Origination','Categories')->where('status','0')->orderBy("id",'Desc')->get();
        return view('Front.View.past',compact('events'));
    }

    public function details(Request $request){
        $Categories  = Categories::get();
        $event = Event::with('Origination','Categories')->where('id',$request->id)->first();
        return view('Front.View.details',compact('event','Categories'));
    }

    public function contact(Request $request){
        $contact = Home::where('name','contact')->first();
        $Addcontact = Home::where('name','Addcontact')->get();
        return view('Front.View.contact',compact('Addcontact','contact'));
    }



}

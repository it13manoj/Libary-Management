<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Origination;
use App\Event;

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

        $event = Event::where('id',$request->id)->first();
        return view('Front.View.details',compact('event'));
    }

    public function contact(Request $request){
        return view('Front.View.contact');
    }



}

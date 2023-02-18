<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Event;
class AboutController extends Controller
{
    public function index(Request $request){
        $about = Home::where("name","abouts")->first();
        $charity = Home::where("name","Charity")->get();
        $charityHeading = Home::where("name","CharityHeading")->first();
        $Event = Event::where("status","1")->get();
        return view('Front.View.about',compact('about','charity','charityHeading','Event'));
    }
}

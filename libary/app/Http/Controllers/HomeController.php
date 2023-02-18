<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Home::where("name","Hero")->get();
        $charityHeading = Home::where("name","CharityHeading")->first();
        $charity = Home::where("name","Charity")->get();
        $section2 = Home::where("name","section2")->first();
        $appeals = Home::with('categories')->where("name","appeals")->get();
        $appealsHead = Home::where("name","appealsHead")->first();
        $mission = Home::where("name","mission")->first();
        $Event = Event::where("status","1")->get();
        return view('Front.View.index',compact('slider','charityHeading','charity','section2','appeals','mission','Event','appealsHead'));
    }



}

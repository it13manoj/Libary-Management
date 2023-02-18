<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Quotes;

class QuotesController extends Controller
{
    public function quotes(Request $request){
            $Quotes = new Quotes();
            $Quotes->name= $request->name;
            $Quotes->email= $request->email;
            $Quotes->message = $request->message;
            $Quotes->save();

            session()->flash('message', 'Succefully send your Quotes');
            return redirect()->back();
    }

    public function geQuotes(Request $request){
            $Quotes = Quotes::get();
            return view('Admin.View.Quotes',compact('Quotes'));
    }
}

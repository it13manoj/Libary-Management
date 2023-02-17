<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Origination;


class OriginationController extends Controller
{
    public function organizationAdd(Request $request){
        return view('Admin.View.Organization.add');
    }


    public function organizationList(Request $request){
        return view('Admin.View.Organization.list');
    }


    public function save(Request $request){
        $Origination= new Origination();
        $Origination->name = $request->name;
        $Origination->contact = $request->contact;
        $Origination->email = $request->email;
        $Origination->pic = $this->UploadImages('Organization','Profile',$request->file);
        $Origination->description = $request->dis;
        $Origination->fb = $request->fb;
        $Origination->inst = $request->inst;
        $Origination->ln = $request->ln;
        $Origination->tw = $request->tw;
        $Origination->user_id = Auth::user()->id;
        $Origination->save();

        return \redirect()->back();

    }
}

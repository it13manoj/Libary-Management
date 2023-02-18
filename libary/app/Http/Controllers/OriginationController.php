<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Origination;


class OriginationController extends Controller
{
    public function organizationAdd(Request $request,$id=""){
        if($id){
            $Origination = Origination::find($id);
        }else{
            $Origination = new Origination();
        }
        return view('Admin.View.Organization.add',compact('Origination'));
    }


    public function organizationList(Request $request){
        $Origination = Origination::get();
        return view('Admin.View.Organization.list',compact('Origination'));
    }

    public function organizationdelete(Request $request,$id){
        $Origination = Origination::find($id)->delete();
        return \redirect("admin/organization");
    }


    public function save(Request $request){
        if($request->id){
            $Origination= Origination::find($request->id);
        }else{
            $Origination= new Origination();
        }

        $Origination->name = $request->name;
        $Origination->contact = $request->contact;
        $Origination->email = $request->email;
        if($request->file)
        $Origination->pic = $this->UploadImages('Organization','Profile',$request->file);
        $Origination->description = $request->dis;
        $Origination->fb = $request->fb;
        $Origination->inst = $request->inst;
        $Origination->ln = $request->ln;
        $Origination->tw = $request->tw;
        $Origination->user_id = Auth::user()->id;
        try{
            $Origination->save();
        }catch (Exception $e) {
            return \redirect("admin/organization");
        }


        return \redirect("admin/organization");

    }
}

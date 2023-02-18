<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Auth;
use Session;
use App\Categories;
use App\Origination;
use App\Event;
use App\Image;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          return view('Admin.view.home');
    }

    public function slider(){
        $slider = Home::where("name","Hero")->get();
        return view('Admin.View.Home.slider',compact('slider'));
    }

    public function secondSection(Request $request){
        $section = Home::where("name","section2")->first();
        return view('Admin.View.Home.Section3',compact('section'));
    }

    public function appealsdelt(Request $request,$id){
        $section = Home::find($id)->delete();
        return redirect('admin/appeals');

    }

    public function appeals(Request $request,$id=""){
        $cat = Categories::get();
        if($id){
            $appeals = Home::find($id);
        }

        else{
            $appeals = new Home();
        }
        $appealslist = Home::with("categories")->where("name","appeals")->get();
        $appealsHead = Home::where("name","appealsHead")->first();
        return view('Admin.View.Home.appeals',compact('cat','appeals','appealslist','appealsHead'));
    }

    public function mission(Request $request){
        $home = Home::where("name","mission")->first();
        return view('Admin.View.Home.Mission',compact('home'));
    }

    public function secondSectionSave(Request $request){
        $home1 = Home::where("name","section2")->count();
        if($home1 > 0){
            Home::where("name","section2")->delete();
        }
        $new_array = array();
        if(!empty($request->file)){
            for($i=0; $i < sizeof($request->file); $i++){
                array_push($new_array,$this->UploadImages('section2','upload'.$i,(array_key_exists($i,$request->file) ? $request->file[$i] : "")));
            }
        }
            if(!empty($request->images)){
                for($i=0; $i < sizeof($request->images); $i++){
                    array_push($new_array,$request->images[$i]);
                }
            }
            $home = new Home();
                $file = array();
                $images = array();
                if($request->file){
                        $file=$request->file;
                }
                if($request->images){
                    $images= $request->images;
                }
                $home->description=$request->discription;
                $home->title=$request->title;
                $home->heading2=$request->sectionHeading1;
                $home->heading3=$request->sectionHeadin2;
                $home->images =json_encode($new_array);
                $home->name="section2";
                // dd($home);
                $home->save();

                 return redirect()->back();
    }


    public function appealsSave(Request $request){
            $Homes = Home::where("name","appealsHead")->delete();
            $Homes = new Home();
            $Homes->heading2 = $request->sectionHeading1;
            $Homes->heading3 = $request->sectionHeadin2;
            $Homes->name = "appealsHead";
            $Homes->save();

        $file="";
        if(!empty($request->file)){
                $file=$this->UploadImages('appeals','upload', $request->file);
        }
            if(!empty($request->images)){
                    $file=$request->images[0];
            }

                if($request->id){
                    $home = Home::find($request->id);
                }else{
                    $home = new Home();
                }


                $home->description=$request->discription;
                $home->title=$request->title;

                $home->images =$file;
                $home->name="appeals";
                if($request->title && $request->discription && $file)
                $home->save();

                 return redirect()->back();
    }

    public function missionSave(Request $request){
        $file="";
        if(!empty($request->file)){
                $file=$this->UploadImages('mission','upload', $request->file);
        }
            if(!empty($request->images)){
                    $file=$this->UploadImages('mission','upload',$request->images);
            }
                $home =  Home::where("name","mission")->first();

                $home->description=$request->dis;
                $home->title=$request->title;
                $home->heading2=$request->sectionHeadin2;
                if($file)
                $home->images =$file;
                $home->name="mission";

                $home->save();

                 return redirect()->back();
    }



    public function saveSlider(Request $request){
        $home1 = Home::where("name","Hero")->count();
        if($home1 > 0){
            Home::where("name","Hero")->delete();
        }

        for($i=0; $i < sizeof($request->title); $i++){
            $home = new Home();
                $file = array();
                $images = array();
                if($request->file){
                        $file=$request->file;
                }
                if($request->images){
                    $images= $request->images;
                }
                $home->description=array_key_exists($i,$request->discription) ? $request->discription[$i] :"";
                $home->title=array_key_exists($i,$request->title) ? $request->title[$i] : "";
                $home->heading2=array_key_exists($i,$request->heading1) ? $request->heading1[$i] : "";
                $home->heading3=array_key_exists($i,$request->heading2) ? $request->heading2[$i] : "";
                $home->images = $this->multipleUploads(array_key_exists($i,$file) ? $file[$i] : "",array_key_exists($i,$images) ? $images[$i] : "", $i);
                $home->name="Hero";
                $home->save();
        }
        return redirect()->back();

    }

        public function charitySave(Request $request){
            $home1 = Home::where("name","Charity")->count();
            if($home1 > 0){
                Home::where("name","Charity")->delete();
                Home::where("name","CharityHeading")->delete();
            }

            $h1= new Home();
            $h1->heading2 = $request->sectionHeading1;
            $h1->heading3 = $request->sectionHeadin2;
            $h1->name="CharityHeading";
            $h1->save();

            for($i=0; $i < sizeof($request->title); $i++){
                $home = new Home();
                    $file = array();
                    $images = array();
                    if($request->file){
                            $file=$request->file;
                    }
                    if($request->images){
                        $images= $request->images;
                    }
                    $home->description=array_key_exists($i,$request->discription) ? $request->discription[$i] :"";
                    $home->title=array_key_exists($i,$request->title) ? $request->title[$i] : "";
                    $home->images = $this->multipleUploads(array_key_exists($i,$file) ? $file[$i] : "",array_key_exists($i,$images) ? $images[$i] : "", $i);
                    $home->name="Charity";
                    $home->save();
            }
            return redirect()->back();
        }

    public function charity(Request $request){
        $charityHeader = Home::where("name","CharityHeading")->first();
        $charity = Home::where("name","Charity")->get();
        return view('Admin.View.Home.Charity',compact('charityHeader','charity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addEvents(Request $request){
        $Categories = Categories::get();
        $Origination = Origination::get();
        return view('Admin.View.Events.add',compact('Categories','Origination'));
    }

    public function upload(Request $request){
        $Events = new Image();
        $file = $this->UploadImages('Events','upload',$request->upload);
        $Events->image =$file;
        $Events->save();

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('storage/'.$file);
        $msg = 'Image successfully uploaded';
        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

        // Render HTML output
        @header('Content-type: text/html; charset=utf-8');
        echo $re;
    }


    public function save(Request $request){
        $Events= new Event();
        $Events->title = $request->title;
        $Events->category_id = $request->categorries;
        $Events->origination_id = $request->organization;
        $Events->Event_Date = date('Y-m-d H:i:s',strtotime($request->date));
        $Events->location = $request->location;
        $Events->cost = $request->cost;
        $Events->pic = $this->UploadImages('Events','img',$request->file);
        $Events->description = $request->dis;
        $Events->fb = $request->fb;
        $Events->inst = $request->inst;
        $Events->ln = $request->ln;
        $Events->tw = $request->tw;
        $Events->user_id = Auth::user()->id;
        $Events->save();

        return \redirect('Admin.Events.Events');

    }


    public function update(Request $request,$id){
        $Events= Event::find($id);
        $Events->title = $request->title;
        $Events->category_id = $request->categorries;
        $Events->origination_id = $request->organization;
        $Events->Event_Date = date('Y-m-d H:i:s',strtotime($request->date));
        $Events->location = $request->location;
        $Events->cost = $request->cost;
        $Events->pic = ($request->file) ? $this->UploadImages('Events','img',$request->file) : $Events->pic;
        $Events->description = $request->dis;
        $Events->fb = $request->fb;
        $Events->inst = $request->inst;
        $Events->ln = $request->ln;
        $Events->tw = $request->tw;
        $Events->user_id = Auth::user()->id;
        $Events->save();

        return \redirect('admin/events');

    }


    public function eventList(Request $request){
        $events = Event::with('Origination','Categories')->orderBy("id",'Desc')->get();
        return view('Admin.View.Events.Events',compact('events'));
    }

    public function editevent(Request $request){
        $events = Event::with('Origination','Categories')->where("id",$request->id)->first();
        $Categories = Categories::get();
        $Origination = Origination::get();
        return view('Admin.View.Events.edit',compact('Categories','Origination','events'));
    }


    public function cronJobs(Request $request,$id){
        $event = Event::find($id);
        $event->status="0";
        $event->save();
        return \redirect()->back();
    }


    public function about(Request $request){
        $about =  Home::where("name","abouts")->first();
        return view('Admin.View.Home.about',compact('about'));
    }

    public function aboutSave(Request $request){
        $file="";
        if(!empty($request->file)){
                $file=$this->UploadImages('abuts','upload', $request->file);
        }
            if(!empty($request->images)){
                    $file=$this->UploadImages('abouts','upload',$request->images);
            }

            if( Home::where("name","abouts")->count() > 0){
                $home =  Home::where("name","abouts")->first();
            }else{
                $home = new Home();
            }


                $home->description=$request->dis;
                $home->title=$request->title;
                $home->heading2=$request->sectionHeadin2;
                if($file)
                $home->images =$file;
                $home->name="abouts";

                $home->save();

                 return redirect()->back();
    }

    public function contact(Request $request){
        $contact =  Home::where("name","contact")->first();
        return view('Admin.View.Home.contact',compact('contact'));
    }

    public function addContact(Request $request,$id=""){
        if($id){
            $contact =  Home::find($id);
        }else{
            $contact = new Home();
        }

        $Addcontact =  Home::where("name","Addcontact")->get();
        return view('Admin.View.Home.addContact',compact('Addcontact','contact'));
    }


    public function deleteContact(Request $request,$id=""){
            $contact =  Home::find($id)->delete();
            return redirect('admin/addContact');
    }




    public function contactSave(Request $request){
        $file="";
        if(!empty($request->file)){
                $file=$this->UploadImages('contact','upload', $request->file);
        }
            if(!empty($request->images)){
                    $file=$this->UploadImages('contact','upload',$request->images);
            }

            if( Home::where("name","contact")->count() > 0){
                $home =  Home::where("name","contact")->first();
            }else{
                $home = new Home();
            }


                $home->description=$request->dis;
                $home->title=$request->title;
                $home->heading2=$request->sectionHeadin2;
                if($file)
                $home->images =$file;
                $home->name="contact";

                $home->save();

                 return redirect()->back();
    }

    public function addContactSave(Request $request){

            if( $request->id > 0){
                $home =  Home::find($request->id);
            }else{
                $home = new Home();
            }


                $home->heading3=$request->sectionHeadin1;
                $home->title=$request->title;
                $home->heading2=$request->sectionHeadin2;
                $home->name="Addcontact";
                $home->save();
                 return redirect()->back();
    }

}

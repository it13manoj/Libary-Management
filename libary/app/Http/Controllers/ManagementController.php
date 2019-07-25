<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Auth;
use DB;
class ManagementController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function UserClass(){
    	$records=DB::table('classnames')->paginate(6);
    	return view('UserClass',compact('records'));
    }

	public function addClass(){
    	return view('addClass');
    }

	public function UserList(){
			$records=DB::table('users')
							->select('users.*','classnames.*')
							->join('classnames','classnames.class_id','=','users.Userclass')->where('role','Users')
							->paginate(5);
    	return view('UserList',compact('records'));
    }

	public function addUsers(){
	
	    	return view('addUsers');
	    }


	public function UserBook(){
		$records=DB::table('book')->paginate(5);
    	return view('UserBook',compact('records'));
    }

	public function addBooks(){
	    	return view('addBooks');
	}
	public function SubjectList(){
		$records=DB::table('subject')
							->select('subject.*','classnames.*','book.*')
							->join('book','book.Book_id','=','subject.Subject_Book_name')
							->join('classnames','classnames.class_id','=','subject.Subject_Class_name')
							->paginate(5);
	    	return view('SubjectList',compact('records'));
	}
	public function addSubject(){
				
		    	return view('addSubject');
		}


	public function SaveClass(Request $req){
	$data['class_name']=$req->input('ClassName');
	DB::table('classnames')->insert($data);
	Session::flash('message', 'Successfully Class Created!');
	 return redirect()->route(md5('addClass'));
    }


    public function SaveBook(Request $req){
    	if(isset($_FILES['file']['name'][0]) && $_FILES['file']['name'][0]!=''){
      $path = './uploads/Books';  
        $folder = 'Books';
        if(!is_dir($path))
        mkdir($path);
        $path2=$path."/";
        if(!is_dir($path2))
        mkdir($path2);
        if ( ! $path || ! $path2 )
        return;
    if(!empty($_FILES["file"]['name'])){
        $target_dir = './uploads/'.$folder.'/';
            $timestamp= date('YmdHis');
            $filename=$_FILES["file"]["name"];
            @$extension=end(explode(".", $filename));
             $newfilename=$timestamp.".".$extension;
            $target_file = $target_dir . basename($newfilename);
             $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
              $arr=$target_dir.$newfilename;  
          }
			$data['Book_name']=$req->input('BookName');
			$data['book_auther']=$req->input('Auther');
			$data['book_images'] =$arr;
      }
			DB::table('book')->insert($data);
			Session::flash('message', 'Successfully Book Add!');
			return redirect()->route(md5('addBooks'));
  	}else{
  		Session::flash('message', 'Something worng!');
		return redirect()->route(md5('addBooks'));
  	}
    }



    public function ViewBook(Request $req){
    	$bookid=base64_decode($req->input('key'));
    	$records=DB::table('book')->where('Book_id',$bookid)->first();
    	return view('DisplayBooks',compact('records'));
    }



    public function SaveSubject(Request $req){
    	$input['Subject_name']=$req->input('SubjectName');
    	$input['Subject_Class_name']=$req->input('ClassGet');
    	$input['Subject_Book_name']=$req->input('BookGet');
		DB::table('subject')->insert($input);
		Session::flash('message', 'Successfully Subject Added!');
		return redirect()->route(md5('addSubject'));
    }



    public function GetClass(){
    	return $records=DB::table('classnames')->where('class_status',1)->get();
    }



    public function GetBooks(){
    	return $records=DB::table('book')->where('book_status',1)->get();
    }

    public function SaveUsers(Request $req){
    	$input['name']=$req->input('Name');
    	$input['contact']=$req->input('contact');
    	$input['Userclass']=$req->input('ClassGet');
    	$input['email']=$req->input('email');
    	$input['password']=Hash::make('123456');
    	$input['created_at']=date('Y-m-d h:i:s');
    	DB::table('users')->insert($input);
		Session::flash('message', 'Successfully Register User!');
		return redirect()->route(md5('addUsers'));
    }




    /*End Contaroller*/
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\UserRole;
use Auth;
use Hash;
use Session;
use App\Role;


class SignupController extends Controller
{
    function index(){
        return view('Admin.login');
    }

    public function register(Request $request){
        $users = new User();
        $users->name=$request->username;
        $users->email=$request->email;
        $users->password = Hash::make($request->password);
        if($users->save()){
            return redirect()->back()->with('message','successfully regiseter');
        }else{
            return redirect()->back()->with('message','wrong');
        }

    }

    public function sign_up(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $users= new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password = Hash::make($request->password);
        if($users->save()){
            $this->success('success','Your are registered successfully. please login');
        }else{
            $this->error('error','Somethis worng');
        }
    }




    public function sign_in(Request $request){
        $credentials = request(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect("admin/dashboard");
        } else {
            return redirect()->back()->with('message','wrong');
        }
    }

}

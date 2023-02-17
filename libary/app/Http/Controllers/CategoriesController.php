<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categories;


class CategoriesController extends Controller
{
    public function add(Request $request){
        return view('Admin.View.Categories.add');
    }

    public function saveCat(Request $request){
        $categories = new Categories();
        $categories->name=$request->name;
        $categories->user_id= Auth::User()->id;
        $categories->save();
        return redirect()->back();
    }

    public function list(Request $request){
        $categories =Categories::get();
        return view('Admin.View.Categories.list',compact('categories'));
    }
}

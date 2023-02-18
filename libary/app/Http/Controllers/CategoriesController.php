<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categories;


class CategoriesController extends Controller
{
    public function add(Request $request, $id=""){
        if($id){
            $Categories = Categories::find($id);
        }else{
            $Categories= new Categories();
        }
        return view('Admin.View.Categories.add',compact('Categories'));
    }

    public function saveCat(Request $request){
        if($request->id){
        $categories =Categories::find($request->id);
        }else{
            $categories = new Categories();
        }
        $categories->name=$request->name;
        $categories->user_id= Auth::User()->id;
        $categories->save();
        return redirect('admin/cat-list');
    }

    public function list(Request $request){
        $categories =Categories::get();
        return view('Admin.View.Categories.list',compact('categories'));
    }

    public function delete(Request $request, $id){

            $Categories = Categories::find($id)->delete();

            return redirect('admin/cat-list');
    }
}

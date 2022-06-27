<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use Session;
class categoryController extends Controller
{
    public function index(){
    	$data = DB::table('category')->get();
    	return view('category.index',compact('data'));
    }

     public function create(){
    	
    	return view('category.create');
    }

     public function store(Request $request){
    	
    	DB::table('category')->insert([

    		'name'=>$request->category_name,
    		'description'=>$request->description,
    		'created_at'=>now(),
    		'updated_at'=>now(),
    	]);
    	Session::flash('success',"Data saved successfully");
    	 return redirect('category/create');
    }

    public function update(Request $request){
    	
    	DB::table('category')->where('id','=',$request->id)->update([

    		'name'=>$request->category_name,
    		'description'=>$request->description,
    		'created_at'=>now(),
    		'updated_at'=>now(),
    	]);
    	Session::flash('success',"Data Update successfully");
    	 return redirect('category');
    }

     public function delete($id){
    	DB::table('category')->where(['id'=>$id])->delete();

    	Session::flash('success',"Data delete successfully");
    	 return redirect('category');
    }

     public function edit($id){

    	$data = DB::table('category')->where(['id'=>$id])->get()->first();
    	
    	return view('category.edit',compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Nurses;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public  function adddoctors(){
  	return view('adddoctors');
  }

  public  function  viewdoctors(){
  	$doctors=Doctor::all();
  	return view('viewdoctors',compact('doctors'));
  }


  public  function postdoctor(Request $request){
  	$doctor=Doctor::create($request->all());
  	return redirect()->back()->with('success','doctor added successfully');
  }
  public function edit($id){
	  $doctor=Doctor::find($id);
	  return view('editdoctors',compact('doctor'));

  }
  public function delete($id){
  	$doctor=Doctor::find($id);
  	$doctor->delete();

      return redirect()->back()->with('success','doctor deleted succeessfully');
  }
	public  function update(Request $request,$id){
		$doctor=Doctor::find($id);
		$doctor->update($request->all());
		return redirect()->back()->with('success','doctor updated successfully');
	}
	public  function addnurses() {
		return view('addnurses');

	}
	public  function  viewnurses(){
		$nurses=Nurses::all();
		return view('viewnurses',compact('nurses'));
	}
	public  function postnurses(Request $request){
		$nurses=Nurses::create($request->all());
		return redirect()->back()->with('success','nurses added successfully');
	}
	public function deleted($id){
		$nurse=Nurses::find($id);
		$nurse->delete();

		return redirect()->back()->with('success','nurse deleted succeessfully');
	}
	public function edited($id){
		$nurse=Nurses::find($id);
		return view('editnurse',compact('nurse'));

	}
	public  function updated(Request $request,$id){
		$nurse=Nurses::find($id);
		$nurse->update($request->all());
		return redirect()->back()->with('success','nurse updated successfully');
	}
}

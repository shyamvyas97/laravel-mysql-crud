<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp;
use Validator;
use App\Http\Controllers\Controller;


class employ extends Controller
{

    

    public function form()
    {
        return view('form');
    }


    public function insert(Request $r)
    {
    
    	$o=new emp;
    	$o->name=$r->name;
    	$o->designation=$r->designation;
		$o->department=$r->department;
		$o->address=$r->address;
		$o->dob=$r->dob;
		$o->aadhar=$r->aadhar;
		$o->bloodgroup=$r->bloodgroup;
		$o->mobile=$r->mobile;
		$o->email=$r->email;

		$o->save();

		return view('form');
    }
    public function display()
    {
    	$o=emp::all();

    	return view('display',compact('o'));
    }
    public function update($id)
    {
    	$o=emp::find($id);

    	return view('update',compact('o'));
    }
    public function update1(Request $r)
    {
    	$id=$r->id;
    	$o=emp::find($id);
    	$o->name=$r->name;
    	$o->designation=$r->designation;
		$o->department=$r->department;
		$o->address=$r->address;
		$o->dob=$r->dob;
		$o->aadhar=$r->aadhar;
		$o->bloodgroup=$r->bloodgroup;
		$o->mobile=$r->mobile;
		$o->email=$r->email;

		$o->save();

		return redirect('insert');
    }
    public function delete($id)
    {
    	$o=emp::find($id);
    	
		$o->delete();

		return redirect('insert');
    }
}

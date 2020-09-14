<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function StoreNewslater(Request $request){
    	$validateData = $request->validate([
     'email' => 'required|unique:newslaters|max:55',
    	]);

   $data = array();
   $data['email'] = $request->email;
   DB::table('newslaters')->insert($data);
   $notification=array(
            'messege'=>'Thanks for Subscribing',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification); 	

    }


 





}


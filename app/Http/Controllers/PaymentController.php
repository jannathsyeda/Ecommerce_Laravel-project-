<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Cart;
use Session;
use Mail;
use App\Mail\InvoiceMail;
class PaymentController extends Controller
{
    public function Payment(Request $request)
    {

        // $data = array();
        // $data['name'] = $request->name;
        // $data['phone'] = $request->phone;
        // $data['email'] = $request->email;
        // $data['address'] = $request->address;
        // $data['city'] = $request->city;
         $payment = $request->payment;
         echo $payment;
        //   dd($data);
     
        //  if ($request->payment == 'stripe') {
             
        //  return view('pages.payment.stripe',compact('data'));
     
        //  }elseif ($request->payment == 'paypal') {
        //      # code...
        //  }elseif ($request->payment == 'ideal') {
        //      # code...
        //  }else{
        //      echo "Cash On Delivery";
        //  }  
         
     
        }
}

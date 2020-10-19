<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function NewOrder(){
    
     $order = DB::table('orders')->where('status',0)->get();
     return view('admin.order.pending',compact('order'));

    }


    
    public function ViewOrder($id){

        $order = DB::table('orders')
                ->join('users','orders.user_id','users.id') 	
                ->select('orders.*','users.name','users.phone')
                ->where('orders.id',$id)
                ->first();
                // dd($order);
    
         $shipping = DB::table('shipping')->where('order_id',$id)->first();
         // dd($shipping);
    
         $details = DB::table('orders_details')
                     ->join('products','orders_details.product_id','products.id')
                     ->select('orders_details.*','products.product_code','products.image_one')
                     ->where('orders_details.order_id',$id)
                     ->get();
                     // dd($details);
             return view('admin.order.view_order',compact('order','shipping','details'));		
    
        }

        public function PaymentAccept($id){
            DB::table('orders')->where('id',$id)->update(['status'=>1]);
            $notification=array(
                    'messege'=>'Payment Accept Done',
                    'alert-type'=>'success'
                     );
                   return Redirect()->route('admin.neworder')->with($notification); 
            } 
        
        
          public function PaymentCancel($id){
              DB::table('orders')->where('id',$id)->update(['status'=>4]);
            $notification=array(
                    'messege'=>'Order Cancel',
                    'alert-type'=>'success'
                     );
                   return Redirect()->route('admin.neworder')->with($notification); 
          }
         
    

}

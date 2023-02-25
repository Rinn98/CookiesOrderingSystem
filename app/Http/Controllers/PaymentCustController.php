<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use App\Models\Order;
use App\Models\Stock;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PaymentCustController extends Controller

{
    
    public function index()
    {
        return view('FrontEnd.payment');
    } 
   
    public function store(Request $request)
    
    {
        foreach (\Cart::Content() as $item){
        
       $order= Order::create([
        
             'user_id'           => Auth::id(),
             'status'            => 'processing',
             'total'             =>  \Cart::Total()+5,
             'item'          => $item -> name,
              'quantity'         => $item ->qty,
              'price'         => $item ->price,
              'shipping'         => 5.00,
             'name'              =>  request('name'),
             'address'           =>  request('address'),
             'city'              =>  request('city'),
             'state'             => request('state'),
             'postcode'          =>  request('postcode'),
             'email'             =>  request('email'), 
             'phoneno'           =>  request('phoneno'),
              'paymentInvoice'    =>  request('paymentInvoice'),
             'delivery'          =>  request('delivery'),
             'remarks'           =>  request('remarks'),
             'paymentMethod'    =>  request('paymentMethod'),
         ]);
        }
        if ($image = $request->file('paymentMethod')) {
            $destinationPath = 'image/';
            $stockImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $stockImage);
            $storeData['paymentMethod'] = "$stockImage";
        }
    
     
        
        return redirect('/paymentcust') ->with('success','Your Payment already been made');
        
        } 
    
        
    
    
}
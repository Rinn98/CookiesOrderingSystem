<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Stock;
use Illuminate\Http\Request;
use Notification;
use App\Notifications\BillingNotification;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('FrontEnd.admintrackorder', compact('order'));
    }
    public function neworder()
    {
        $order = DB::table('order')
                ->where('status', 'processing')->get();
        return view('FrontEnd.adminneworder', compact('order'));
    }
    public function stafforders()
    {
        $order = DB::table('order')
        ->whereNotNull('staff_id')->get();
        return view('FrontEnd.adminstafforder', compact('order'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $stock = Stock::all();
        $stocks = Stock::all();
        return view('FrontEnd.adminaddorder', compact('stock','stocks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order= Order::create([
        
            'status'            => 'processing',
            'total'             => request('total'),
            'item'          => request('item'),
             'quantity'         => request('quantity'),
             'price'         => request('price'),
             'shipping'          => 5.00,
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
       
    
       if ($image = $request->file('paymentMethod')) {
           $destinationPath = 'image/';
           $stockImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $stockImage);
           $storeData['paymentMethod'] = "$stockImage";
       }

        return redirect('/adminorder')->with('completed', 'Order has been saved!');
    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('FrontEnd.adminvieworder', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('FrontEnd.admineditorder', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'status' => 'required|max:255',
            'total' => 'required|max:255',
            'item' => 'required|max:255',
            'quantity' => 'required|max:255',
            'price' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'postcode' => 'required|max:255',
            'email' => 'required|max:255',
            'phoneno' => 'required|max:255',
            'paymentInvoice', //=> 'required|max:255',
            'delivery' => 'required|max:255',
            'remarks' ,//=> 'required|max:255',
            'paymentMethod',// => 'required|max:255',
        ]);
        Order::whereId($id)->update($updateData);
        return redirect('/adminorder')->with('completed', 'order has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/adminorder')->with('completed', 'Stock has been deleted');
    }
    public function send() 
    {
    	
        // $order = Order::first();
        $order = Order::where('email', '!=', null)->orderBy('created_at','DESC')->first();
        $data = [
            'greeting' => 'Hi,',
            'body' => 'We have receive your order',
            'thanks' => 'Thank you for buying cookies from 98s cookies',
            // 'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => 57
        ];
  
        Notification::send($order, new BillingNotification($data));
   
        dd('Notification sent!');
    }
    
}

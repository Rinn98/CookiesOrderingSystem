<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('FrontEnd.adminpayment',compact('order'));
    } 
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('FrontEnd.adminviewpayment', compact('order'));
    }
}

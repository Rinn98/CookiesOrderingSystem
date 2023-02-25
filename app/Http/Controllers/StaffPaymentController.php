<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class StaffPaymentController extends Controller
{
    public function index()
    {

         $order = Order::all();
        return view('FrontEnd.staffpayment', compact('order'));
    }
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('FrontEnd.staffviewpayment', compact('order'));
    }
}

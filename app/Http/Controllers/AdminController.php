<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        // $neworder = DB::table('order')->where('status',"=","processing")->get();
        $order = Order::all();
        return view('FrontEnd.admindashboard',compact('order'));
    }  
    
}

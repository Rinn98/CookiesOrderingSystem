<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use DB;

class MonthlySalesController extends Controller
{
    public function index(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        //  echo "$date";
        // $newdate= date('d-m-y',strtotime($date));
        //  echo "$newdate";
         $total = Order::whereBetween('created_at', [$startdate,$enddate])->sum('total');
         $order = Order::whereBetween('created_at', [$startdate,$enddate])->get();
         return view('FrontEnd.adminmonthlysales',compact('order','total','startdate','enddate'));
        
    }
}
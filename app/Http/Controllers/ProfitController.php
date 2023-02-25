<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use DB;

class ProfitController extends Controller
{
    public function index(Request $request)
    {
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $totalsales = Order::whereBetween('created_at', [$startdate,$enddate])->sum('total');
        $totalexpenses = Stock::whereBetween('created_at', [$startdate,$enddate])->sum('cost');
        $shipping = Order::whereBetween('created_at', [$startdate,$enddate])->sum('shipping');
        $gross = $totalsales-$totalexpenses-$shipping;
        return view('FrontEnd.adminprofitreport',compact('startdate','enddate','totalsales','totalexpenses','shipping','gross'));
    }
    
}
 
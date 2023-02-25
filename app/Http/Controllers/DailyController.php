<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use DB;

class DailyController extends Controller
{
    // public function index()
    // {
    //     $order = Order::all();
    //     return view('FrontEnd.admindailyreport', compact('order'));
    // }
    public function index(Request $request)
    {
        $date = $request->date; 
        //  echo "$date";
        // $newdate= date('d-m-y',strtotime($date)); 
        //  echo "$newdate";
         $total = DB::table('order')->where('created_at',$date)->sum('total');
         $order = DB::table('order')->where('created_at',$date)->get();
         return view('FrontEnd.admindailyreport',compact('order','total','date'));
    }
    public function createPDF(Request $request) {
        // retreive all records from db
        $date = $request->input('date');
         $order = DB::table('order')->where('created_at',$date)->get(); 
         $total = DB::table('order')->where('created_at',$date)->sum('total');
        // share data to view
        // view()->share('order',$order);
        $pdf = PDF::loadView('FrontEnd.admindailyreport',compact('order','total'))->setOptions(['defaultFont' => 'sans-serif']);
        // download PDF file with download method
        return $pdf->download('dailysalesreport.pdf');
      }

}

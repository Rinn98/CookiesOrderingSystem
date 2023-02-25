<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TrackOrderController extends Controller
{
 
    public function index()
    {
        $user_id = Auth::user()->id;
        $order = DB::table('order')->where('user_id' ,'=', $user_id)->get();
        if(count ($order)>0){
        return view('FrontEnd.trackorder',compact('order'));
        }
        else
        {
            return view('FrontEnd.trackorder');
        }
}
}
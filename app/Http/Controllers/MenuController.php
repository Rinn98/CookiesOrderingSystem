<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $stock = Stock::all();
        return view('FrontEnd.menu',compact('stock'));
    }  
    
}
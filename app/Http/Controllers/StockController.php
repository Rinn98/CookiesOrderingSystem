<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        $stock = Stock::all();
        return view('FrontEnd.adminstock', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FrontEnd.adminaddstock');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'image' ,//=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'cost' => 'required|max:255',
            'quantity' => 'required|max:255',
            
        ]);
        $storeData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $stockImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $stockImage);
            $storeData['image'] = "$stockImage";
        }
        $stock = Stock::create($storeData);

        return redirect()->route('adminstock.index')
        ->with('success','Stock created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('FrontEnd.admineditstock', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id){

    //     $PreviousPic = $request->Prev_pic;

    //     $data = array();
    //     $data['image'] = $request->image;
    //     $data['description'] = $request->description;
    //     $data['price'] = $request->price;
    //     $data['cost'] = $request->cost;
    //     $data['quantity'] = $request->quantity;
        

    //     $image = $request->file('image');

    //     if ($image != null){ 
    //         unlink($PreviousPic);
    //         $image_name = date('dmy_H_s_i');  // Yang ni based on your image..
    //         $ext = strtolower($image->getClientOriginalExtension());
    //         $imageFullName = $image_name.'.'.$ext;
    //         $uploadPath = 'image/';
    //         $imageURL = $uploadPath.$imageFullName;
    //         $success = $image->move($uploadPath,$imageFullName);

    //     $data['image'] = $imageURL;
    //     $Stdata = DB::table('stocks')->where('id', $id)->update($data);

    //     return redirect()->route('adminstock.index')
    //                      ->with('success','Updated! The Cookies Data Updated Successfully');

    //     }else{
    //         // $PreviousPic = $request->Prev_pic;
    //         // $image = $request->file('image');
    //         // $data['image'] = $request->image;
    //         unset($data['image']);
    //     }
    //         $Stdata = DB::table('stocks')->where('id', $id)->update($data);

    //     return redirect()->route('adminstock.index')
    //                      ->with('success','Updated! The Cookies Data Updated Successfully');
        
    // }

    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'image', //=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'cost' => 'required|max:255',
            'quantity' => 'required|max:255',
            
        ]);
        //$updateData = $request->all();
        $updatedata = request()->except(['_token']);
        if ($image = $request->file('image')) {
            $destinationPath = 'image';
            error_log('example');
            $stockImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $stockImage);
            $updateData['image'] = "$stockImage";
        
        }else{
            unset($updateData['image']);
        }
        
        Stock::whereId($id)->update($updateData);
        return redirect('/adminstock')->with('success', 'Stock has been updated');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect('/adminstock')->with('success', 'Stock has been deleted');
    }
    

     
 
}
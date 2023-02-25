<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;
use DB;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function index()
    {
        $stock = Stock::all();
        return view('FrontEnd.menu', compact('stock'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('FrontEnd.cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->description,
            'qty' => $request->qty,
            'price' => $request->price,
            'options' => 
                ['image' => $request->image],
           
        ]);
        

        return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
    }
    // {
    //     $stock = Stock::find($id);
 
    //     if(!$stock) {
 
    //         abort(404);
 
    //     }
 
    //     $cart = session()->get('cart');
 
    //     // if cart is empty then this the first product
    //     if(!$cart) {
 
    //         $cart = [
    //                 $id => [
    //                     "image" => $stock->image,
    //                     "description" => $stock->description,
    //                     "price" => $stock->price,
    //                     "quantity" => 1
                        
                        
    //                 ]
    //         ];
 
    //         session()->put('cart', $cart);
 
    //         return redirect()->back()->with('success', 'Product added to cart successfully!');
    //     }
        // if(isset($cart[$id])) {
        //     $cart[$id]["quantity"]++;
        //     session()->put('cart', $cart);
        //     return redirect()->back()->with('success', 'Product added to cart successfully!');
        // }
        // // if item not exist in cart then add to cart with quantity = 1
        // $cart[$id] = [
        //                 "image" => $stock->image,
        //                 "description" => $stock->description,
        //                 "price" => $stock->price,
        //                 "quantity" => 1
        // ];
        // session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    
        // if cart not empty then check if this product exist then increment quantity
       
//     $stock = DB::select('select * from stocks where id='.$id);
//     $cart = Session::get('cart');
//     $cart[$stock[0]->id] = array(
//         "image" => $stock[0]->image,
//         "description" => $stock[0]->description,
//         "price" => $stock[0]->price,
//         "quantity" => 1,
//     );

//     Session::put('cart', $cart);
//     Session::flash('success','barang berhasil ditambah ke keranjang!');
//     //dd(Session::get('cart'));
//     return redirect()->back();
// }
    // {
    //     $stock = Stock::findOrFail($id);
          
    //     $cart = session()->get('cart', []);
  
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             'image' => $stock['image'],
    //             'name' => $stock['description'],
    //             'quantity' => 1,
    //             'price' => $stock['price'],
                
    //         ];
    //     }
          
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Stock added to cart successfully!');
    // }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart');
    }

}
    

<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Stock;
use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\User;

use Auth;

class CustomAuthController extends Controller

{
    public function index()
    {
        return view('FrontEnd.login');
    }  
      
    public function adminindex()
    {
        $customer = Order::all();
        $customer = $customer->count();
        $neworder = Order::where('status', 'processing')->get();
        $neworder = $neworder->count();
        $total = Order::sum('total');
        return view('FrontEnd.admindashboard',compact('neworder','customer','total'));
    }  
    
    
    public function homepage()
    {
        
        return view('FrontEnd.homepage');
    }   


public function login(Request $request)
{  
    $inputVal = $request->all();

    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
    ]);

    if(auth()->attempt(array('username' => $inputVal['username'], 'password' => $inputVal['password']))){
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin');
        }else{
            return redirect()->route('userdashboard');
        }
    }else{
        return redirect()->route('login')
            ->with('error','Email & Password are incorrect.');
    }     
}


    /*public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }*/

    public function welcome()
    {
        return view('FrontEnd.welcome');
    } 

    public function registration()
    {
        return view('FrontEnd.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'username' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'phoneno' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("registration")->with('success','You have registered, You may login');
    }


    public function create(array $data)
    {
      return user::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'username' => $data['username'],
        'address' => $data['address'],
        'city' => $data['city'],
        'state' => $data['state'],
        'postcode' => $data['postcode'],
        'phoneno' => $data['phoneno'],
      ]);
    }    
    

    public function userdashboard()
    {
        {
            $stock = Stock::all();
            return view('FrontEnd.dashboard',compact('stock'));
        }
  
        
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('homepage');
    }

}

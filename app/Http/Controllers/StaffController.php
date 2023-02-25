<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\Staff;
use Illuminate\Support\Facades\View;

class StaffController extends Controller
{
    public function index()
    {
        return view('FrontEnd.stafflogin');
    }  
 
    public function staffregistration()
    {
        return view('FrontEnd.staffregistration');
    }
     
    public function homepage()
    {
        return view('FrontEnd.homepage');
    }   
    public function welcome()
    {
        return view('FrontEnd.welcomestaff');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        echo "<p> try</p>";
        $credentials = $request->only('username', 'password');
        if (Auth::guard('staff')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')])){
            
            
            // if successful, then redirect to their intended location
             return redirect()->route("dashboardstaff");
        }
  
        return redirect("stafflogin")->with('success','Login details are not valid');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'password' => 'required|min:6',
        'username' => 'required',
        'address' => 'required',
        'city' => 'required',
        'postcode' => 'required',
        'phoneno' => 'required',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("staffregistration")->with('success','You have registered, You may login');
    }
     
     public function dashboardstaff()
     {
        $customer = Order::all();
        $customer = $customer->count();
        $neworder = Order::where('status', 'processing')->get();
        $neworder = $neworder->count();
        $total = Order::sum('total');
    //   if(Auth::check()){
         return view('FrontEnd.staffdashboard',compact('neworder','customer','total'));
   }
    //    return Redirect::to("stafflogin")->with('success','Opps! You do not have access');
    // }
 
    public function create(array $data)
    {
      return Staff::create([
        'name' => $data['name'],
        'password' => Hash::make($data['password']),
        'username' => $data['username'],
        'address' => $data['address'],
        'city' => $data['city'],
        'postcode' => $data['postcode'],
        'phoneno' => $data['phoneno'],
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('homepage');
    }
}

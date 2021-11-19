<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        
        
        if (Admin::where('email', '=', $request->email)->exists()) {

            $admin = Admin::where('email', $request->email)->first();
            Session::put('id', $admin);
            Session::put('user', 'admin');

               
            return redirect()->intended('/dashboard');
            
         }if(Customer::where('email', '=', $request->email)->exists()){

            $customer = Customer::where('email', $request->email)->first();
            Session::put('id', $customer->email);
            Session::put('user', 'customer');


            return redirect()->intended('/dashboard');
         }
         return back()->with('loginError', 'Login Failed!');
        
    }



}

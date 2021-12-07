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

    public function signout(){
        Session::flush();
        return redirect()->intended('/');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        
        
        if (Admin::where('email', '=', $request->email)->exists()) {
            $admin = Admin::where('email', $request->email)->first();
            if($admin->password == $request->password){
                session()->regenerate();
                session(['id' => $admin->id]);
                session(['name' => $admin->name]);
                session(['user' => 'admin']);
                
                return redirect()->intended('/');
            }       
            
            
         }if(Customer::where('email', '=', $request->email)->exists()){

            $customer = Customer::where('email', $request->email)->first();

            
            if($customer->password == md5($request->password)){
                session()->regenerate();
                session(['id' => $customer->id]);
                session(['name' => $customer->name]);
                session(['user' => 'customer']);

                return redirect()->intended('/');
            }
         }
         return back()->with('loginError', 'Login Failed!');
        
    }



}

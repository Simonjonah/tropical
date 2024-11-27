<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function createadmin(Request $request){
        
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required'],
        ]);
        // dd($request);

        $add_admin = new Admin();
        $add_admin->email = $request->email;
        $add_admin->password = \Hash::make($request->password);
        $add_admin->save();
        if ($add_admin) {
            return redirect('admin/login')->with('success', 'You have succesfully registered');
        }else{
            return redirect()->back()->with('error', 'You have not succesfully registered');

        }
    }

    public function loginadmin(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ],[
            'email.exists' => 'This email does not exist',
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            
            return redirect('admin/home')->with('success', 'You have login successfully');
        }else{
            
        }
        
    }

public function home(){
    
    return view('dashboard.admin.home');
}
    
}

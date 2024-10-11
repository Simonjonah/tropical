<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function createuser(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required'],
        ]);

        $add_admin = new Admin();
        $add_admin->email = $request->email;
        $add_admin->password = \Hash::make($request->password);

        if ($add_admin) {
            return redirect('login')->with('success', 'You have succesfully registered');
        }else{
            return redirect()->back()->with('error', 'You have not succesfully registered');

        }
    }
}

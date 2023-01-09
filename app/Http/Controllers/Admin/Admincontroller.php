<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\admin;
class Admincontroller extends Controller
{
    public function adminloginfrom(){
        return view('backend.admin.auth.login');
    }
    public function admindashboard(){
        return view('backend.admin.home.index');
    }
    public function adminlogin(Request $request){
    $admin = admin::where('email' , $request->email)->first();
    if(!$admin){
        return redirect()->back()->with('error','invalid user name or password');
    }
    else{
        return redirect('/admin/dashboard');
    }
    }
    public function adminLogout(){
        session()->flush();
        return redirect('/');
    }
}

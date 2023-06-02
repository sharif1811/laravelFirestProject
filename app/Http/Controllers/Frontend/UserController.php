<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userLogout(){
        session()->flush();
        return redirect('/')->with('success','User logout has been successfull');
    }

    public function userManage(){
        $users = User::paginate(3);
        return view('backend.admin.user.manage',compact('users'));
    }

    public function userView($id){
        $userView = User::find($id);
        return view('backend.admin.user.view',compact('userView')); 
    }
}

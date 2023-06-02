<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderManage(Request $request){
        //$product = Product::get();
        $sql = Order::with('user','product','vendor')->orderby('created_at','desc');
        if(isset($request->from) && isset($request->to)){
            $sql->whereDate('created_at','>=',$request->from)->whereDate('created_at','<=',$request->to);
            $orders = $sql->get();
            return view('backend.admin.order.manage',compact('orders'));
        }
        $orders = $sql->get();
        return view('backend.admin.order.manage',compact('orders'));
    }
    public function orderView($id){
        $orders = Order::with('user','product','vendor')->find($id);
        return view('backend.admin.order.view',compact('orders'));
    }

    public function orderBack(){
        return redirect('/order/manage')->with('success','successfully back');
    }
    public function orderDelete($id){
        $orderDelete = Order::find($id);
        $orderDelete->delete();
        return redirect('/order/manage')->with('success','Delete has been successfull.');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Cart;
Use App\Models\Vendor;
Use App\Models\User;
Use App\Models\Order;
Use App\Models\OrderDetailes;
Use App\Models\Product;


class CartController extends Controller
{
    public function addToCart(Request $request){
        $addtocart = new Cart();
        $addtocart->user_id = auth()->user()->id;
        $addtocart->vendor_id= $request->vendor_id;
        $addtocart->product_id= $request->product_id;
        $addtocart->qty= $request->qty?$request->qty:1;
        $addtocart->price= $request->price;
        $addtocart->total_price = 1*$request->price;
        $addtocart->save();
        return redirect()->back()->with('success','Cart has been inserted');
    }
    public function checkOut(){
        $checkOut = Cart::with('product')->where('user_id',auth()->user()->id)->get();
        return view('frontend.checkout.index',compact('checkOut'));
    }
    public function cartProductUpdate(Request $request,$id){
        $cartProduct = Cart::find($id);
        $cartProduct->qty=$request->qty;
        $cartProduct->save();
        return redirect()->back()->with('success','Cart has been update');

    }
    public function cartProductdelete($id){
        $cartDelete = Cart::find($id);
        $cartDelete->delete();
        return redirect()->back()->with('success','Cart has been delete');

    }
    public function orderComplate(Request $request){
        $order = new Order();
        $order->product_id = $request->product_id;
        $order->vendor_id = $request->vendor_id;
        $order->user_id = auth()->check() ? auth()->user()->id:1;
        $order->total_price = $request->total_price;
        $order->total_qty = $request->total_qty;
        $order->save();
        if($order->save()){
            $orderDetailes = new OrderDetailes();
            $orderDetailes->order_id = $order->id;
            $orderDetailes->name = $request->name;
            $orderDetailes->email = $request->email;
            $orderDetailes->phone = $request->phone;
            $orderDetailes->address = $request->address;
            $orderDetailes->save();
        }
        $product = Product::where('id',$request->product_id)->first();
        // dd($product);
        $product->qty = $product->qty-$request->total_qty;
        $product->save();
        $cartEmpty = Cart::where('user_id',auth()->user()->id)->get();
        foreach($cartEmpty as $empty){
            $empty->delete();
        }
        return redirect('/')->withSuccess('Your Order has been Completed');


    }
}
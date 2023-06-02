<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;
use App\Models\User;
use App\Models\Review;

class Frontendcontroller extends Controller
{
    public function index(){
        // $catagories = Catagory::with('subcatagory')->get();
        $newProduct = Product::with('catagory','color','size')->where('type','new')->where('status',1)->orderby('created_at','desc')->get();

        $hotProduct = Product::with('catagory','color','size')->where('type','hot')->where('status',1)->orderby('created_at','desc')->get();

        $discountProduct = Product::with('catagory','color','size')->where('type','discount')->where('status',1)->orderby('created_at','desc')->get();
        
        return view('frontend.includes.index',compact('newProduct','hotProduct','discountProduct'));
    }
    public function userLogin(){
        return view('frontend.user.auth');
    }
    public function userRegister(){
        return view('frontend.user.auth');
    }
    public function productDetails($id){
        $product = Product::with('reviews')->find($id);
        return view('frontend.checkout.product-details',compact('product'));
    }

    public function reviewStore(Request $request){
        $reviews = new Review();
        $reviews->rating = auth()->user()->id;
        $reviews->product_id = $request->product_id;
        $reviews->rating = $request->rating;
        $reviews->message = $request->message;
        $reviews->save();
        return redirect()->back()->withSuccess('message has been successfull');
    }
}

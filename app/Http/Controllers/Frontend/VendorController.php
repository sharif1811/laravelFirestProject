<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Catagory;
use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Support\Facades\File;

use Session;
class VendorController extends Controller
{
#<<<<<<<<<<<<<<<<<VENDOR START>>>>>>>>>>>>>>

//Vendor Registar Start
    public function vendorRegistar(){
        return view('frontend.vendor.auth');
    }
//Vendor Registar End

//Vendor Registration Start
    public function vendorRegistration(Request $request){
            $this->validate($request,[
                'name' => 'required|string',
                'email' => 'required|string',
                'password' => 'required',
                'phone' => 'required|string',
                'address' => 'required|string',
                'logo' => 'required',
            ]);
            if($request->file('logo')){
                $name = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('/avtar/'),$name);
            }
            $vendors = new Vendor();
            $vendors->name = $request->name;
            $vendors->email = $request->email;
            $vendors->password = bcrypt($request->password);
            $vendors->phone = $request->phone;
            $vendors->address = $request->address;
            $vendors->logo = $name;
            $vendors->save();
            return redirect()->back()->with('success','your registration successfull');
        }
//Vendor Ragistration End

//Vendor Login Start
        public function vendorLogin(Request $request){
            $this->validate($request,[
                'email'=>'required|string',
                'password'=>'required',
            ]);
            $vendor = Vendor::where('email',$request->email)->first();

            if(!$vendor){
                return redirect()->back()->with('error','You Are Not A Vandor,Please Registard Vendor');
            }else{
                if($vendor->is_approved == 0){
                    return redirect()->back()->with('error','You Are Not a Approved Vendor');
                }
                if(password_verify($request->password, $vendor->password)){
                    Session::put('vendorId',$vendor->id);
                    Session::put('vendorName',$vendor->name);
                    return redirect('/vendor/dashboard');
                }
                else{
                    return redirect()->back()->with('error','password miss match');
                }
            }
        }
//Vendor Login End

//Vendor Manage Start
        public function vendorManage(){
            $vendors = Vendor::orderby('created_at','desc')->paginate(5);
            return view('frontend.vendor.manage',compact('vendors'));
        }
//Vendor Manage ENd

//Vendor Delete Start
        public function vendorDelete($id){
            $vendor = Vendor::find($id);
            $vendor->delete();
            return redirect('/vendor/manage')->with('success');
        }
//Vendor Delete End

//Vendor pending Start
        public function vendorPending($id){
            $vendor = Vendor::find($id);
            $vendor->is_approved=1;
            $vendor->save();
            return redirect()->back()->with('success','Vendor is approved');
        }
//Vendor pending End

//Vendor Approved Start
        public function vendorApproved($id){
            $vendor=Vendor::find($id);
            $vendor->is_approved=0;
            $vendor->save();
            return redirect()->back()->with('success','Vendor is Not Approved');
        }
//Vendor pending End

//Vendor Dashboard Start
        public function vendorDashboard(){
            $products = Product::with('catagory','color','size')->where('vendor_id',session()->get('vendorId'))->paginate(5);
            return view('Frontend.vendor.list',compact('products'));
        }
//Vendor Dashboard End

        public function vendorLogout(){
            session()->flush();
            return redirect('/')->with('success','vendor logout has been successfull');
        }
#<<<<<<<<<<<<<<<<<VENDOR END>>>>>>>>>>>>>>

#<<<<<<<<<<<<<VENDOR PRODUCT START>>>>>>>>>>>

//Vendor Product Create start
        public function vendorProductCreateForm(){
            $catagories = Catagory::get();
            $colors = Color::get();
            $sizes = Size::get();
            return view('Frontend.vendor.create',compact('catagories','colors','sizes'));
        }
//Vendor Product Create End

//Vendor Product Store start
        public function vendorProductStore(Request $request){
            if($request->file('image')){
                $name = time().'.'.$request->image->extension();
                $request->image->move(public_path('/product/'),$name);
            }
            $products = new Product();
            $products->catagory_id = $request->catagory_id;
            $products->vendor_id = session()->get('vendorId');
            $products->color_id = $request->color_id;
            $products->type = $request->type;
            $products->size_id = $request->size_id;
            $products->name = $request->name;
            //$products->status = $request->status;
            $products->image=$name;
            $products->qty = $request->qty;
            $products->price = $request->price;
            if($request->hasFile('multi_image')){
                foreach($request->file('multi_image') as $images){
                    $multipleimage = rand(999,9999).'.'.$images->extension();
                    $images->move(public_path('/gallery/'),$multipleimage);
                    $data[] = $multipleimage;
                }
            }
            $products->multi_image = json_encode($data);
            $products->save();
            return redirect('/vendor/dashboard')->with('success','Product has been Uploded');

        }
//Vendor Product store end

//Vendor Product Delete start
        public function vendorProductDelete($id){
            $products = Product::find($id);
            //use Illuminate\Support\Facades\File;
            if($products){
                $public = public_path('/product/'.$products->image);
                if(File::exists($public)){
                    File::delete($public);
                }
            }
            $products->delete();
            return redirect()->back()->with('success');
        }
//Vendor Product Delete End

//Vendor Product Edit start
        public function vendorProductEdit($id){
            $catagories = Catagory::get();
            $colors = Color::get();
            $sizes = Size::get();
            $products = Product::find($id);
            return view('Frontend.vendor.edit',compact('products','catagories','colors','sizes'));
        }
//Vendor Product Edit ENd

//Vendor Product Manage Start
        public function vendorProductManage(){
             $products = Product::with('catagory','color','size','vendor')->orderby('created_at','desc')->paginate(5);
            return view('Frontend.vendor.productManage',compact('products'));
        }
//Vendor Product Manage ENd

//Vendor Product Approved Start
        public function vendorProductApproved($id){
            $products = Product::find($id);
            $products->status=1;
            $products->save();
            return redirect()->back()->with('success','vendor is approved');
        }
//Vendor Product Approved End

//Vendor Product Pending Start
        public function vendorProductPending($id){
            $products = Product::find($id);
            $products->status=0;
            $products->save();
            return redirect()->back()->with('success','vendor is not approved');
        }
//Vendor Product Pending End

//Vendor Product Drop Start
        public function vendorProductDrop($id){
            $product = Product::find($id);
            $product->delete();
            return redirect()->back()->with('success');
        }
//Vendor Product Drop ENd

#<<<<<<<<<<<<<<<<<VENDOR PRODUCT END>>>>>>>>>>>>>>
}

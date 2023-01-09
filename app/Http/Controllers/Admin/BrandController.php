<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Brand;

class BrandController extends Controller
{
    // Brand Create Start
    public function brandCreate(){ 
        $brands = Catagory::get();
        return view('backend.admin.brand.create',compact('brands'));
    }
    // Brand Create End

    // Brand Store Start
    public function brandStore(Request $request){
        $this->validate($request,[
            'catagory_id'=>'required|integer',
            'name' => 'required|string',
        ]);
        $brands = new Brand();
        $brands->catagory_id = $request->catagory_id;
        $brands->name = $request->name;
        $brands->slug = str_replace(' ','-',strtolower($request->name));
        $brands->save();
        return redirect('/brand/manage')->with('success');
    }
    // Brand Store End

    // Brand Manage Start
    public function brandManage(){
        $brands = Brand::with('catagory')->paginate(5);
        return view('backend.admin.brand.list',compact('brands'));
    }
    // Brand Manage End

    // Brand Delete Start
    public function brandDelete($id){
        $brandsdelete = Brand::find($id);
        $brandsdelete->delete();
        return redirect('/brand/manage')->with('success');
    }
    // Brand Delete End

    // Brand Edit Start
    public function brandEdit($id){
        $catagories = Catagory::get();
        $brands = Brand::find($id); 
        return view('backend.admin.brand.edit',compact('brands','catagories'));
    }
    // Brand Edit End

    // Brand Update Start
    public function brandUpdate(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|string',
        ]);
        $updateBrands = Brand::find($id);
        $updateBrands->name = $request->name;
        $updateBrands->slug = str_replace(' ','-',strtolower($request->name));
        $updateBrands->save();
        return redirect('/brand/manage')->with('success');

    }
    // Brand Update End
}


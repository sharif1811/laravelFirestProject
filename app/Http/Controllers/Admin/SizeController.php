<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Catagory;

class SizeController extends Controller
{
    public function sizeCreate(){
        return view('backend.admin.size.create');
    }

    public function sizeStore(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'status' => 'required'
        ]);
        $catagories = Catagory::get();
        $sizes = new Size();
        $sizes->name = $request->name;
        $sizes->catagory_id = $request->catagory_id;
        $sizes->status = $request->status;
        $sizes->save();
        return redirect()->back()->with('success','Size has been Created');
    }

    public function sizeManage(){
        $size = Size::with('catagory')->paginate(5);
        return view('backend.admin.size.list',compact('size'));
    }
    public function sizeDelete($id){
        $size = Size::find($id);
        $size->delete();
        return redirect()->back()->with('success','Size has been Deleted');
    }
    public function sizeEdit($id){
        $catagories = Catagory::get();
        $size = Size::find($id);
        return view('backend.admin.size.edit',compact('size','catagories'));
    }
    public function sizeUpdate(Request $request,$id){
        $size = Size::find($id);
        $size->catagory_id = $request->catagory_id;
        $size->name = $request->name;
        $size->status = $request->status;
        $size->save();
        return redirect('/size/manage')->with('success');
    }
}

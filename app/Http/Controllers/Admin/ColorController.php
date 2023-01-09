<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Catagory;

class ColorController extends Controller
{
    public function colorCreate(){
        return view('backend.admin.color.create');
    }
    public function colorStore(Request $request){
      $this->validate($request,[
        'name'=>'required|string',
        'catagory_id'=>'required|integer',
        'status'=>'required',
      ]);
      $catagories = Catagory::get();
      $colors= new Color();
      $colors->catagory_id = $request->catagory_id;
      $colors->name = $request->name;

      $colors->status = $request->status;
      $colors->save();
      return redirect('/color/manage');
    }
    public function colorManage(){
      $color = Color::with('catagory')->paginate(5);
      return view('backend.admin.color.list',compact('color'));
    }
    public function colorDelete($id){
      $color = Color::find($id);
      $color->delete();
      return redirect('/color/manage');
    }
    public function colorEdit($id){
      $catagories = Catagory::get();
      $color = Color::find($id);
      return view('backend.admin.color.edit',compact('color','catagories'));

    }
    public function colorUpdate(Request $request,$id){
      $colors = Color::find($id);
      $colors->catagory_id = $request->catagory_id;
      $colors->name = $request->name;
      $colors->status = $request->status;
      $colors->save();
      return redirect('/color/manage')->with('success','Color has been updated');
    }

}

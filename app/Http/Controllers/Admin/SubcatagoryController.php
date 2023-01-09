<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Subcatagory;

class SubcatagoryController extends Controller
{
    //subcatagory Create start
    public function subcatagoryCreate(){
        $catagories = Catagory::get();
        return view('backend.admin.subcatagory.create',compact('catagories'));
    }
    //subcatagory Create end

        //subcatagory Edit start
        public function subcatagoryEdit($id){
            $catagories = Catagory::get();
            $subcatagories = Subcatagory::find($id);
            return view('backend.admin.subcatagory.edit',compact('subcatagories','catagories'));
        }
    //subcatagory Edit end

    //subcatagory Edit start
    // public function subcatagoryEdit($id){
    //     $subcatagories = Subcatagory::with('catagory')->find($id);
    //     return view('backend.admin.subcatagory.edit',compact('subcatagories'));
    // }
    //subcatagory Edit end

    //subcatagory Manage start
    public function subcatagoryManage(){
        $subcatagories = Subcatagory::with('catagory')->paginate(5);

        return view('backend.admin.subcatagory.list',compact('subcatagories'));
    }
    //subcatagory Manage end

    //subcatagory Delete start
    public function subcatagoryDelete($id){
        $subcatagorydelete = Subcatagory::find($id);
        $subcatagorydelete->delete();
        return redirect('/subcatagory/manage')->with('success');
    }
    //subcatagory Delete end

    public function subcatagoryUpdate(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|string',
        ]);

        $Subcatagory = Subcatagory::find($id);
        $Subcatagory->name = $request->name;
        $Subcatagory->slug = str_replace(' ','-',strtolower($request->name));
        $Subcatagory->save();
        return redirect('/subcatagory/manage')->with('success');
    }

    //subcatagory store start
    public function subcatagoryStore(Request $request){
        $this->validate($request,[
            'catagory_id'=>'required|integer',
            'name'=>'required|string',
        ]);

        $subcatagories = new Subcatagory();
        $subcatagories->catagory_id = $request->catagory_id;
        $subcatagories->name = $request->name;
        $subcatagories->slug = str_replace(' ','-',strtolower($request->name));
        $subcatagories->save();
        return redirect('/subcatagory/manage')->with('success');
    }
    //subcatagory store End
}

<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Catagory;
class CatagoryController extends Controller
{
    //catagorycreate start
    public function catagorycreate(){
        return view('backend.admin.catagory.create');
    }
    //catagorycreate end

    //catagoryManage start
    public function catagoryManage(){
        $catagorys = Catagory::paginate(4);
        return view('backend.admin.catagory.list',compact('catagorys'));
    }
    //catagory Manage end

    //catagory Delete start
    public function catagoryDelete($id){

        $catagorydelete = Catagory::find($id);
        //use Illuminate\Support\Facades\File;
        if($catagorydelete){
            $public = public_path('/category/'.$catagorydelete->image);
            if(File::exists($public)){
                File::delete($public);
            }
        }
        $catagorydelete->delete();
        $catagorydelete->subcatagory()->delete();
        $catagorydelete->brand()->delete();
        $catagorydelete->color()->delete();
        $catagorydelete->size()->delete();

        return redirect('/catagory/manage')->with('success');
    }
    //catagoryDelete end

    //catagoryUpdate start
    public function catagoryEdit($id){
        $catagory = Catagory::find($id);

        return view('backend.admin.catagory.edit',compact('catagory'));
    }
    //catagoryUpdate end

    //catagorystore start
    public function catagorystore(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'image'=> 'required',
        ]);
        if($request->file('image')){
            $name = time().'.'.$request->image->extension();
            $request->image->move(public_path('/category/'),$name);
        }
        $catagory = new Catagory();
        $catagory->name = $request->name;
        $catagory->slug= str_replace(' ','-',strtolower($request->name));
        $catagory->image = $name;
        $catagory->save();
        return redirect('/catagory/manage')->with('success');
    }
    //catagorystore end

    //catagoryUpdate start
    public function catagoryUpdate(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|string',
        ]);
        $catagory = Catagory::find($id);
        if(isset($request->image)){
            if($catagory->image && file_exists('catagory/'.$catagory->image)){
                unlink('catagory/'.$catagory->image);
            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/category/'),$updateImage);
            $catagory->image = $updateImage;
        }
        $catagory->name = $request->name;
        $catagory->slug = str_replace(' ', '-',strtolower($request->name));
        $catagory->save();
        return redirect('/catagory/manage')->with('success');
    }
    //catagoryUpdate end
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\itemsRequest;
use App\Models\item;
use App\Models\admin;
use App\Models\main_categori;
use Illuminate\Support\Facades\Session;
// 123456
class itemsController extends Controller
{
    public function index(){
        $items=item::select()->paginate(pagination_count);
        return view('admin.items.index',compact('items'));
    }
    // ######### start creat function#######################

    public function create(){
        $categories=main_categori::select()->paginate(pagination_count);
        return view('admin.items.create',compact('categories'));
    }
    // ######### start insert function  #######################

    public function insert(itemsRequest $request)
    {
// all method will nedd for image - files in any application
        // $test=$request->file('photo')->guessExtension();
        // $test=$request->file('photo')->getMimeType();
        // $test=$request->file('photo')->getClientOriginalName();
        // $test=$request->file('photo')->getClientMimeType();
        // $test=$request->file('photo')->guessClientExtension();
        // $test=$request->file('photo')->getSize();
        // $test=$request->file('photo')->getError();
        // $test=$request->file('photo')->isvlaid();
        // =================================
        $admin_id=session_id();
        // $value = session()->('id',);


        // dd($value);
        $NewImageName= time().'-'.$request-> name.'.'.$request->photo->extension();

        $request->photo->move(public_path('images'),$NewImageName);

        $active= !$request->has('active')?  0 : 1;
    //    $adminid= admin::select()->find($value);

                item::create([

                    'name'       =>$request->name,
                    'image_path' =>$NewImageName,
                    'active'     =>$active,
                    'price'      =>$request->price,
                    'category_id'=>$request->category,
                    'admin_id'=>$admin_id

            ]);
        return redirect()->route('all.items')->with(['success'=>'success item added']);

    }
    // ######### start edite function #######################
    public function edite($id){
        $items=item::select()->find($id);
        return view('admin.items.edite',compact('items'));
    }


    // ######### start update function #######################
    public function update($id ,itemsRequest $request){


        $q=item::find($id);
        $active= !$request->has('active') ? 0 : 1;
        // $img = $q->image_path;
        // dd($img);
        // should do func to save photo

        $q->update([
            'name'=> $request->input('name'),
            'price'=>$request->input('price'),
            'active'=>$active
        ]);

    // ================ update  photo =======================

        if ($request->has('photo')) {

            $NewImageName= time().'-'.$request-> name.'.'.$request->photo->extension();

            $request->photo->move(public_path('images'),$NewImageName);

            // $filePath = $NewImageName;
            item::where('id', $id)
                ->update([
                    'image_path' => $NewImageName,
                ]);
        }

    return redirect()->route('all.items')->with(['success'=>'success update']);
    }
// ################ start delete fuction#############################
/*
public function delete($id){

   $query= item::select()->find($id);
    $query->delete($id);
    return redirect()->route('all.item')->with(['success'=>'category Deleted succefuly']);

}*/

}

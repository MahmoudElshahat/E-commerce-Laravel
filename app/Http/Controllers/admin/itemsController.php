<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\itemsRequest;
use App\Models\item;

class itemsController extends Controller
{
    public function index(){
        $items=item::select()->paginate(pagination_count);
        return view('admin.items.index',compact('items'));
    }
    // ######### start creat function#######################

    public function create(){
        return view('admin.items.create');
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
        $NewImageName= time().'-'.$request-> name.'.'.$request->photo->extension();

        $request->photo->move(storage_path('images'),$NewImageName);

        $active= !$request->has('active')?  0 : 1;

                item::create([

                    'name'      =>$request->input('name'),
                    'image_path'=> $NewImageName,
                    'active'    =>$active

            ]);
        return redirect()->route('all.item');

    }
    // ######### start edite function #######################
/*
    public function edite($id){
        $categore=item::select()->find($id);
        return view('admin.itemes.edite',compact('categore'));
    }

    // ######### start update function #######################
    public function update($id , itemRequest $request){

        $q=item::find($id);
        $active= !$request->has('active') ? 0 : 1;
        // $img = $q->image_path;
        // dd($img);
        // should do func to save photo

        $q->update([
            'name'=> $request->input('name'),

            'active'=>$active
        ]);

    // ================ update  photo =======================

        if ($request->has('photo')) {

            $NewImageName= time().'-'.$request-> name.'.'.$request->photo->extension();

            $request->photo->move(public_path('images'),$NewImageName);

            $filePath = $NewImageName;
            item::where('id', $id)
                ->update([
                    'image_path' => $filePath,
                ]);
        }

    return redirect()->route('all.item')->with(['success'=>'success update']);
    }
// ################ start delete fuction#############################
public function delete($id){

   $query= item::select()->find($id);
    $query->delete($id);
    return redirect()->route('all.item')->with(['success'=>'category Deleted succefuly']);

}*/

}

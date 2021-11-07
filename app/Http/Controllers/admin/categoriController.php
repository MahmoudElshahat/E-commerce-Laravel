<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\main_categori;
use App\Http\Requests\admin\categoriRequest;
use App\traits\all;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Global_;

// use App\Http\Controllers\admin\categoriControllerauthorize() ;


class categoriController extends Controller
{
    use all;
    // ######### start index function ###############3
    public function index(){
        $categories=main_categori::select()->paginate(pagination_count);
        return view('admin.categories.index',compact('categories'));
    }
    // ######### start creat function#######################

    public function create(){
        return view('admin.categories.create');
    }
    // ######### start #######################

    // public function store(categoriRequest $request){

    //     main_categori::insert($request->except(['_token']));
    //     return redirect()->route('all.categori');
    // }
    // ############################################3
    public function insert(categoriRequest $request)
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

                main_categori::create([

                    'name'      =>$request->input('name'),
                    'image_path'=> $NewImageName,
                    'active'    =>$active

            ]);
        return redirect()->route('all.categori');

    }
    // ######### start edite function #######################

    public function edite($id){
        $categore=main_categori::select()->find($id);
        return view('admin.categories.edite',compact('categore'));
    }

    // ######### start update function #######################
    public function update($id , categoriRequest $request){

        $q=main_categori::find($id);
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

            // $filePath = $NewImageName;
            main_categori::where('id', $id)
                ->update([
                    'image_path' => $NewImageName,
                ]);
        }

    return redirect()->route('all.categori')->with(['success'=>'success update']);
    }
// ################ start delete fuction#############################
public function delete($id){

   $query= main_categori::select()->find($id);
    $query->delete($id);
    return redirect()->route('all.categori')->with(['success'=>'category Deleted succefuly']);

}

}// end file

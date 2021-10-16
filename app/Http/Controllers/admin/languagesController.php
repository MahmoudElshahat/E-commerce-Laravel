<?php

namespace App\Http\Controllers\admin;
use App\Models\language;
use App\Http\Controllers\Controller;
use App\Http\Requests\languagesRequest;
use Exception;
use Illuminate\Http\Requests\Request;
// use Illuminate\Support\Facades\App\Http\Request;
// use authorize;/
define('pagination_count',10);
class languagesController extends Controller
{
//  ######################start index language function ###############
    public function index(){
        $languages=language::select()->paginate(pagination_count);
        return view('admin.languages.index',compact('languages'));
    }
// #################################################################
    public function create(){
        return view('admin.languages.create');
    }
// ##################start store language function #################
    public function store(languagesRequest $requests){
     try{
        language::insert($requests->except(['_token']));
        return redirect()->route('admin.languages')->with(['success' => 'تم حفظ اللغة بنجاح']);
      }catch(\exception $ex){
        return redirect()->route('admin.languages')->with(['error' => 'هناك  خطأ بالبيانات']);
     }
    }
// ###################start edit language function######################
    // public function edit($id){
    //     try{
    //     $language = language::select()->find($id);
    //     if(!$language) {return redirect() -> route('admin.languages');}
    //     // return view('admin.languages.edit');
    //     }catch(\Exception $ex){

    //         return $ex;
    //     }
    // }
    public function edit($id)
    {
        $language = Language::select()->find($id);
        if (!$language) {
            return redirect()->route('admin.languages')->with(['error' => 'هذه اللغة غير موجوده']);
        }

        return view('admin.languages.edit');
    }
    // ################## stert update language function ################
    public function update($id){
        $languages=language::select()->find($id);
        return view('admin.languages.index',compact('languages'));
    }
    // ##################stert delete language function#########################
    public function delete(){
        $languages=language::select()->paginate(pagination_count);
        return view('admin.languages.index',compact('languages'));
    }
// ############################################################
}// end parent class

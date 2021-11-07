<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\language;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use App\traits\all;
// /opt/lampp/htdocs/jewelry33/app/traits

// use all;
class mainCategoryController extends Controller
{
   /* use all;
// ################### select data by language - api  ########################
    public function index(){
        $languages=language::select('id','name_'. app()->getlocale())-> get();
        $lang_name=[
            'ar'=> 'all arabic data',
            'en'=> 'all endlish data'];
        return $this->return_data('languages',$languages,$lang_name[app()->getlocale()]);
        // return Response()->json($q);
    }
//   #################   ##################################
    public function get_cate_byid(Request $request){
        $language=language::selection()->find($request->id) ;
        if(!$language)
         return $this -> return_error('400','not fund');
        else
         return $this -> return_data('lang',$language,'succes');

    }
// ####################### change status  ##################

public function change_status(Request $request){
    language::where('id' , $request-> id
    )->update(['active'=>$request-> active]);
    return $this-> return_succes('200',' succes udate ');
}
// ################### login ########*/
}// class end

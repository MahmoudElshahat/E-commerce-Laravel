<?php

namespace App\Http\Controllers\admin;
use App\Models\language;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\languagesRequest;
use Exception;
use Illuminate\Http\Requests\Request;
// use Illuminate\Support\Facades\App\Http\Request;
// use authorize;/
// define('pagination_count',10);
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

      }catch(exception $e){

        return redirect()->route('admin.languages')->with(['error' => 'هناك  خطأ بالبيانات']);
     }
    }
// ###################start edit language function######################

    public function edite($id)
    {
        $languages= language::select()->find($id);

        if (!$languages) {

            return redirect()->route('admin.languages')->with(['error' => 'هذه اللغة غير موجوده']);
        }

        return view('admin.languages.edit',compact('languages'));
    }
    // ################## stert update language function ################
    public function update($id ,languagesRequest $request){
        // $language=language::select()->find($id);
        // return view('admin.languages.edit',compact($language));
        try {
            $languages= language::select()->find($id);
            if (!$languages) {
                return redirect()->route('admin.languages.edite', $id)->with(['error' => 'هذه اللغة غير موجوده']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $languages->update($request->except('_token'));

            return redirect()->route('admin.languages')->with(['success' => 'تم تحديث اللغة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    // ##################stert delete language function#########################
    public function delete($id){

      language::select()->find($id)->delete();

        return redirect()->route('admin.languages')->with(['success'=>'تم حذف العنصر بنجاح']);
    }
// ############################################################
}// end parent class

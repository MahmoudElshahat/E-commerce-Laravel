<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// ======================
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Api\apiLoginRequest;
use Illuminate\Support\Facades\Auth;
// use App\traits\all;
// ================
class AuthController extends Controller
{
    // use all;
public function login(apiLoginRequest $request){
    $data = $request->only('email', 'password');
    $validator= validator::make($data,['email'=>$request-> input('email'),'password'=>$request-> input('password')]);

    if($validator->fails()){
        $code=$this->returnCodeAccordingToInput($validator);
        return $this->returnValidationError($code,$validator);
    }

    // $candintial=$request -> only(['email','password']);
    $token = Auth::guard('admin_api') -> attempt($data);
    if(!$token){
        return $this->returnValidationError('e001','not found ///');
    }else{
        return $this->return_data('admin',$token);
    }
}






}

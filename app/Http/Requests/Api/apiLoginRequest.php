<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
// ===========
// use Illuminate\Support\Facades\Validator;
use app\traits\all;
class apiLoginRequest extends FormRequest
{
    use all;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return[
            //
        ];

}
public function api_login_request(){

    return  [
        'email'=>'required | exists:admins,zemail',
        'password'=>'required' //| exists:admins:password


    ];

    // $validator= validator::make($request->all(),$rules);
    // if($validator->fails()){
    //     $code=$this->returnCodeAccordingToInput($validator);
    //     return $this->returnValidationError($code,$validator);
    // }

}

public function messages()
    {
        return [
            //
            'emai'=>'Pleas, insert failed email ',
            'password'=>'Pleas, insert failed password'
        ];
    }
} //end file

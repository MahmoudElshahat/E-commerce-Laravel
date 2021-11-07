<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class categoriRequest extends FormRequest
{
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
        return [
            'photo'=>'required_without:id',
            'name'=>'required'
            // 'abbr'=>'abbr',

        ];
    }
    // ############# start massage function ##########
    public function masseage(){

        return [
            'photo'=>'field "photo" is required',
            'name'=>'field " name " is required'

        ];


    }
}

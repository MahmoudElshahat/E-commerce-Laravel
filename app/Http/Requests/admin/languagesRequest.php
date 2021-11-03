<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class languagesRequest extends FormRequest
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
            //
            'name_en'=>'required',
            'abbr'=>'required',
            'direction'=>'required'

        ];
    }
    // ####################################################33
    public function messages()
    {
        return[
            'name_en'=>'name field is required',
            'abbr'=>'abbr field is required',
            'direction'=>'direction field is required'
        ];
    }
}

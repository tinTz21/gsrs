<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiundoMbinuRequest extends FormRequest
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
            'class'=>'required',
            'class1'=>'required',
            'chair'=>'required',
            'chair1'=>'required',
            'table'=>'required',
            'table1'=>'required',
            'toilet'=>'required',
            'toilet1'=>'required',
            'boys'=>'required',
            'boys1'=>'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WanafunziRequest extends FormRequest
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
            'wavulana'=>'required',
            'wasichana'=>'required',
            'total'=>'required',
            'school_id'=>'required',
            'wavulana1'=>'required',
            'wasichana1'=>'required',
            'total1'=>'required',
            'wavulana2'=>'required',
            'wasichana2'=>'required',
            'total2'=>'required',
            'wavulana3'=>'required',
            'wasichana3'=>'required',
            'total3'=>'required',
        ];
    }
}

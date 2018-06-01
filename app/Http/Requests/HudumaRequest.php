<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HudumaRequest extends FormRequest
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
            'usafiri'=>'required',
            'firstaid'=>'required',
            'ulinzi'=>'required',
            'duka'=>'required',
            'unasihi'=>'required',
            'mtandao'=>'required',
        ];
    }
}

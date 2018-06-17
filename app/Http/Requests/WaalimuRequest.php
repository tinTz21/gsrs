<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaalimuRequest extends FormRequest
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
            'vacancy1'=>'required',
            'vacancy2'=>'required',
            'vacancy3'=>'required',
            'vacancy4'=>'required',
            'vacancy5'=>'required',
            'vacancy6'=>'required',
            'vacancy7'=>'required',
            'vacancy8'=>'required',
            'vacancy9'=>'required',
            'vacancy10'=>'required',
            'vacancy11'=>'required',
            'vacancy12'=>'required',
            'vacancy13'=>'required',
            'vacancy14'=>'required',
            'vacancy15'=>'required',
            'vacancy16'=>'required',
            'vacancy17'=>'required',
            'vacancy18'=>'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaarifayashuleRequest extends FormRequest
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
            'jinalashule'=>'required',
            'phone'=>'required',
            'mkoa'=>'required',
            'anwani'=>'required',
            'nukushi'=>'required',
            'halmashauri'=>'required'
            'mji'=>'required',
            'baruapepe'=>'required|email',
            'kata'=>'required',
            'usajili'=>'required',
            'tareheusajili'=>'required',
            'umilikiwashule'=>'required',
            'mmiliki'=>'required',
            'shuleilipo'=>'required',
            'km'=>'required',
            'malazi'=>'required',
            'jinsia'=>'required',
            'mchepuo'=>'required',
            'kidato'=>'required',
            'ainashule'=>'required',
            'eneo'=>'required'
            'hati'=>'required',
            'hatinamba'=>'required',
            'hatitarehe'=>'required',
            'mitazamraba'=>'required',
            'latitude'=>'required',
            'longitude'=>'required'
        ];
    }
}

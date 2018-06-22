<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KiongoziRequest extends FormRequest
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
            'mahitaji'=>'required',
            'vilivyopo'=>'required',
            'mahitaji1'=>'required',
            'school_id'=>'required',
            'vilivyopo2'=>'required',
            'mahitaji3'=>'required',
            'vilivyopo4'=>'required',
            'mahitaji4'=>'required',
            'vilivyopo5'=>'required',
            'mahitaji6'=>'required',
            'vilivyopo7'=>'required',
            'mahitaji8'=>'required',
            'vilivyopo9'=>'required',
            'mahitaji10'=>'required',
            'vilivyopo11'=>'required',
            'mahitaji12'=>'required',
            'vilivyopo13'=>'required',
            'mahitaji14'=>'required',
            'vilivyopo15'=>'required',
            'mahitaji16'=>'required',
            'vilivyopo16'=>'required',
            'mahitaji17'=>'required',
            'vilivyopo17'=>'required',
            'mahitaji18'=>'required',
            'vilivyopo18'=>'required',
            'mahitaji19'=>'required',
            'vilivyopo19'=>'required',
            'mahitaji20'=>'required',
            'vilivyopo20'=>'required',
            'mahitaji21'=>'required',
            'vilivyopo21'=>'required',
            'mahitaji22'=>'required',
            'vilivyopo22'=>'required',
            'mahitaji23'=>'required',
            'vilivyopo23'=>'required',
            'mahitaji24'=>'required',
            'vilivyopo24'=>'required',
            'mahitaji25'=>'required',
            'vilivyopo25'=>'required',
            'mahitaji26'=>'required',
            'vilivyopo26'=>'required',
            'mahitaji27'=>'required',
            'vilivyopo27'=>'required',
            'mahitaji28'=>'required',
            'vilivyopo28'=>'required',
            'mahitaji29'=>'required',
            'vilivyopo29'=>'required',
            'mahitaji30'=>'required',
            'vilivyopo30'=>'required',
            'mahitaji31'=>'required',
            'vilivyopo31'=>'required',
            'mahitaji32'=>'required',
            'vilivyopo32'=>'required',
            'mahitaji33'=>'required',
            'vilivyopo33'=>'required',
            'mahitaji34'=>'required',
            'vilivyopo34'=>'required',
            'mahitaji35'=>'required',
            'vilivyopo35'=>'required',
            'mahitaji36'=>'required',
            'vilivyopo36'=>'required',
            'mahitaji37'=>'required',
            'vilivyopo37'=>'required',
            'mahitaji38'=>'required',
            'vilivyopo38'=>'required',
            'mahitaji39'=>'required',
            'vilivyopo39'=>'required',
            'mahitaji40'=>'required',
            'vilivyopo40'=>'required',
            'mahitaji41'=>'required',
            'vilivyopo41'=>'required',
            'mahitaji42'=>'required',
            'vilivyopo42'=>'required',

        ];
    }
}

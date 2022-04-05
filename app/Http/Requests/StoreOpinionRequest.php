<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Pollin14\LaravelCurpValidation\Rules\CurpRule;


class StoreOpinionRequest extends FormRequest
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

                // 'numberSerie' => 'required|string|max:18|unique:opinions,numberSerie,except,id,deleted_at,NULL',
                // '' => 'required|string|max:18|unique:,numberSerie',
                'numberSerie' => 'unique:opinions,numberSerie,NULL,NULL,deleted_at,NULL',
                'originVehicle' => 'required',
                'curp' => 'required|string|max:18',
                'folioOpinion' => 'required|max:20',


        ];
    }
}

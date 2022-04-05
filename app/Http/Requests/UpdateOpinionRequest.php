<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpinionRequest extends FormRequest
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
                'numberSerie' => 'required|string|max:18|unique:opinions,numberSerie,'.$this->opinion->id,
               // 'numberSerie' => 'unique:opinions,numberSerie,{$this->opinion->id},id,deleted_at,NULL',
                //'email' => 'unique:user,email,{$userId},id,deleted_at,NULL'
                'originVehicle' => 'required',
                'curp' => 'required|string|max:18',
                'folioOpinion' => 'required|max:20',

        ];
    }
}

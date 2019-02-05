<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        $rules = [
            'name'=>'required|min:3',
            'price'=>'required|numeric',
            'service_package'=> 'required'
        ];
        if (request()->route('service_id') && intval(request()->route('user_id'))>0){
            $rules = [
                'name'=>'min:3',
                'price'=>'numeric',
            ];
        }
        return $rules;
    }
}

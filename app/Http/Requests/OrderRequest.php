<?php

namespace App\Http\Requests;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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

        $packages = Package::pluck('package_id')->toArray();
        $services = Service::pluck('service_id')->toArray();
        $rules = [
            'packageList' => 'required|in:'.implode(',',$packages),
            'serviceList' => 'required|in:'.implode(',',$services),
            'usernameLinkOrder' =>'regex:/^[a-zA-Z0-9._]+$/',
            'videoLinkOrder'=> 'regex:/(https?:\/\/www\.)?instagram\.com(\/p\/\w+\/?)/',
            'pictureLinkOrder'  => 'regex:/(https?:\/\/www\.)?instagram\.com(\/p\/\w+\/?)/',
        ];
        return $rules;
    }
}

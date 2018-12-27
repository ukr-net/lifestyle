<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class FeatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch (strtolower($this->method())) {
            case 'post': return Auth::user()->canDo('FEATURES_ADD'); break;
            case 'put': return Auth::user()->canDo('FEATURES_UPDATE'); break;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'alias' => 'required|unique:features,alias|max:255',
            'text' => 'required'
        ];
    }
}

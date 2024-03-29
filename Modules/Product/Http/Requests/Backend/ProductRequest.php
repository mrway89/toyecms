<?php

namespace Modules\Product\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'              => 'required|max:191',
            'slug'              => 'nullable|max:191',
            'content'           => 'required',
            'category_id'       => 'required|numeric',
            'created_by_alias'  => 'nullable|max:191',
            'featured_image'    => 'required|max:191',
            'order'             => 'nullable|numeric',
        ];
    }
}

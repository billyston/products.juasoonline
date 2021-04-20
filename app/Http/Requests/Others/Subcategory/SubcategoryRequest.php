<?php

namespace App\Http\Requests\Others\Subcategory;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array|mixed
     */
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                              => [ 'required' ],
                'data.id'                                                           => [ 'required', 'string', 'exists:sub_categories,id' ],
                'data.type'                                                         => [ 'required', 'string', 'in:Subcategory' ],

                'data.attributes.name'                                              => [ 'sometimes', 'string', 'unique:categories,name' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:Subcategory' ],

            'data.attributes.name'                                                  => [ 'required', 'string', 'unique:categories,name' ],
            'data.attributes.description'                                           => [ 'sometimes', 'string' ],

            'data.relationships.category.category_id'                               => [ 'required', 'string', 'exists:categories,id' ],
        ];
    }
}

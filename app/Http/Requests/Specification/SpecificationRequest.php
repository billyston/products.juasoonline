<?php

namespace App\Http\Requests\Specification;

use Illuminate\Foundation\Http\FormRequest;

class SpecificationRequest extends FormRequest
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
     * @return array
     */
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                  => [ 'required' ],
                'data.type'                                             => [ 'required', 'string', 'in:Specification' ],

                'data.attributes'                                       => [ 'sometimes' ],
                'data.attributes.specification'                         => [ 'sometimes' ],
                'data.attributes.data.value'                            => [ 'sometimes' ],
            ];
        }

        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:Specification' ],

            'data.specifications'                                       => [ 'required' ],
            'data.specifications.data'                                  => [ 'required' ],
            'data.specifications.data.*.specification'                  => [ 'required' ],
            'data.specifications.data.*.value'                          => [ 'required' ],

            'data.relationships.product.product_id'                     => [ 'required', 'string', 'exists:products,id' ],
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages() : array
    {
        return
        [
            'data.required'                                             => "The data field is invalid",

            'data.type.required'                                        => "The type is required",
            'data.type.string'                                          => "The type must be of a string",
            'data.type.in'                                              => "The type is invalid",

            'data.specifications.required'                              => "The specification(s) is required",
            'data.specifications.data.required'                         => "The data for specification(s) is required",

            'data.specifications.data.*.specification.required'         => "All specification attribute are required",
            'data.specifications.data.*.value.required'                 => "All specification value are required",

            'data.relationships.product.product_id.required'            => "The product id is required",
            'data.relationships.product.product_id.exists'              => "The product id is invalid",
        ];
    }
}

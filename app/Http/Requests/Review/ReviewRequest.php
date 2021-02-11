<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
                'data.id'                                               => [ 'required', 'string', 'exists:branches,id' ],
                'data.type'                                             => [ 'required', 'string', 'in:Review' ],

                'data.attributes.rating'                                => [ 'sometimes', 'string' ],
                'data.attributes.review'                                => [ 'sometimes', 'string' ],
                'data.attributes.customer_id'                           => [ 'sometimes', 'string' ],
            ];
        }

        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:Review' ],

            'data.attributes.rating'                                    => [ 'required', 'string' ],
            'data.attributes.review'                                    => [ 'required', 'string' ],
            'data.attributes.customer_id'                               => [ 'required', 'string' ],

            'data.relationships.product.product_id'                     => [ 'required', 'string', 'exists:products,id' ],
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages(): array
    {
        return
        [
            'data.required'                                             => "The data field is invalid",

            'data.type.required'                                        => "The type is required",
            'data.type.string'                                          => "The type must be of a string",
            'data.type.in'                                              => "The type is invalid",

            'data.attributes.rating.required'                           => "The rating is invalid",
            'data.attributes.review.required'                           => "The review is invalid",
            'data.attributes.customer_id.required'                      => "The customer resource id is invalid",
        ];
    }
}

<?php

namespace App\Http\Requests\Product\Image;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                              => [ 'required' ],
                'data.id'                                           => [ 'required', 'string', 'exists:images,id' ],
                'data.type'                                         => [ 'required', 'string', 'in:Image' ],
            ];
        }
        return
        [
            'data'                                                  => [ 'required' ],
            'data.type'                                             => [ 'required', 'string', 'in:Image' ],

            'data.overviews.description.*'                          => [ 'sometimes', 'string' ],
            'data.overviews.file.*'                                 => [ 'required', 'string' ],

            'data.relationships.product.product_id'                 => [ 'required', 'string', 'exists:products,id' ],
        ];
    }

    /**
     * @return array|mixed
     */
    public function messages(): array
    {
        return
        [
            'data.required'                                         => "The data field is invalid",

            'data.type.required'                                    => "The type is required",
            'data.type.string'                                      => "The type must be of a string",
            'data.type.in'                                          => "The type is invalid",

            'data.relationships.product.product_id.required'        => "The product id is required",
            'data.relationships.product.product_id.exists'          => "The product does not exist",

            'data.id.exists'                                        => "The overview does not exist",
        ];
    }
}

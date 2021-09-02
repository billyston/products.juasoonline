<?php

namespace App\Http\Requests\Business\Resource\Product\Review;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class ReviewRequest extends FormRequest
{
    /**
     * @param Validator $validator
     */
    protected function failedValidation( Validator $validator )
    {
        throw new HttpResponseException( response() -> json([ 'status' => 'Error', 'code' => Response::HTTP_UNPROCESSABLE_ENTITY, 'errors' => $validator -> errors() -> all() ]) );
    }

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
                'data.id'                                               => [ 'required', 'string', 'exists:reviews,id' ],
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

            'data.relationships.product.product_id.required'            => "The product id is required",
            'data.relationships.product.product_id.exists:products,id'  => "The product id does not exist",
        ];
    }
}

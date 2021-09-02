<?php

namespace App\Http\Requests\Business\Resource\Store\StoreReview;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class StoreReviewRequest extends FormRequest
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
                'data.id'                                               => [ 'required', 'string', 'exists:store_reviews,id' ],
                'data.type'                                             => [ 'required', 'string', 'in:StoreReview' ],

                'data.attributes.product_description'                   => [ 'sometimes', 'string' ],
                'data.attributes.communication'                         => [ 'sometimes', 'string' ],
                'data.attributes.comment'                               => [ 'sometimes', 'string' ],
            ];
        }

        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:StoreReview' ],

            'data.attributes.product_description'                       => [ 'sometimes', 'string' ],
            'data.attributes.communication'                             => [ 'sometimes', 'string' ],
            'data.attributes.comment'                                   => [ 'sometimes', 'string' ],
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

            'data.relationships.store.store_id.required'                => "The store id is required",
            'data.relationships.store.store_id.exists:stores,id'        => "The store id does not exist",
        ];
    }
}

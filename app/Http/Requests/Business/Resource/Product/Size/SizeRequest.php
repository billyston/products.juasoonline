<?php

namespace App\Http\Requests\Business\Resource\Product\Size;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class SizeRequest extends FormRequest
{
    /**
     * @param Validator $validator
     */
    protected function failedValidation( Validator $validator )
    {
        throw new HttpResponseException( response() -> json([ 'status' => 'Error', 'code' => Response::HTTP_UNPROCESSABLE_ENTITY, 'errors' => $validator -> errors() -> all() ]));
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
     * @return array|mixed
     */
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                  => [ 'required' ],
                'data.id'                                               => [ 'required', 'string', 'exists:sizes,id' ],
                'data.type'                                             => [ 'required', 'string', 'in:Size' ],
            ];
        }
        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:Size' ],

            'data.sizes'                                                => [ 'required' ],
            'data.sizes.data'                                           => [ 'required' ],
            'data.sizes.data.*.size'                                    => [ 'required' ],
            'data.sizes.data.*.description'                             => [ 'sometimes' ],

            'data.relationships.product.product_id'                     => [ 'required', 'exists:products,id' ],
        ];
    }

    /**
     * @return array|mixed
     */
    public function messages() : array
    {
        return
        [
            'data.required'                                             => "The data field is invalid",

            'data.type.required'                                        => "The type is required",
            'data.type.string'                                          => "The type must be of a string",
            'data.type.in'                                              => "The type is invalid",

            'data.sizes.required'                                       => "The sizes(s) is required",
            'data.sizes.data.required'                                  => "The data for sizes(s) is required",

            'data.sizes.data.*.size.required'                           => "All sizes attribute are required",

            'data.relationships.product.product_id.required'            => "The product id is required",
            'data.relationships.product.product_id.exists'              => "The product id is invalid",
        ];
    }
}

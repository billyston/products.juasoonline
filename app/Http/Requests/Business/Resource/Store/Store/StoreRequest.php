<?php

namespace App\Http\Requests\Business\Resource\Store\Store;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class StoreRequest extends FormRequest
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
                'data.id'                                               => [ 'required', 'string', 'exists:stores,id' ],
                'data.type'                                             => [ 'required', 'string', 'in:Store' ],
            ];
        }
        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:Store' ],

            'data.attributes.name'                                      => [ 'required', 'string', 'unique:stores,name' ],
            'data.attributes.doing_business_as'                         => [ 'required', 'string', 'unique:stores,doing_business_as' ],

            'data.attributes.region'                                    => [ 'required', 'string' ],
            'data.attributes.city'                                      => [ 'required', 'string' ],
            'data.attributes.address'                                   => [ 'required', 'string' ],
            'data.attributes.postal_code'                               => [ 'required', 'string' ],

            'data.attributes.mobile_phone'                              => [ 'required', 'min:10', 'numeric', 'unique:stores,mobile_phone' ],
            'data.attributes.other_phone'                               => [ 'min:10', 'numeric' ],

            'data.attributes.email'                                     => [ 'required', 'email', 'unique:stores,email' ],
            'data.attributes.website'                                   => [ 'sometimes', 'url' ],

            'data.relationships.country.country_id'                     => [ 'required', 'numeric', 'exists:countries,id' ],
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

            'data.attributes.name.required'                             => "The store name is required",
            'data.attributes.name.string'                               => "The store name must be of a string type",
            'data.attributes.name.unique'                               => "The store name is already taken",

            'data.attributes.doing_business_as.required'                => "The nickname is required",
            'data.attributes.doing_business_as.unique'                  => "The nickname already taken",

            'data.attributes.region.required'                           => "The region is required",
            'data.attributes.region.string'                             => "The region must be of a string type",

            'data.attributes.city.required'                             => "The city is required",
            'data.attributes.city.string'                               => "The city must be of a string type",

            'data.attributes.address.required'                          => "The address is required",
            'data.attributes.address.string'                            => "The address must be of a string type",

            'data.attributes.postal_code.required'                      => "The postal code is required",
            'data.attributes.postal_code.string'                        => "The postal code must be of a string type",

            'data.attributes.mobile_phone.required'                     => "The mobile phone number is required",
            'data.attributes.mobile_phone.min'                          => "The mobile phone number must have a minimum of 10 digits",
            'data.attributes.mobile_phone.numeric'                      => "The mobile phone number must only contain numbers",
            'data.attributes.mobile_phone.unique'                       => "The mobile phone number is already taken",

            'data.attributes.other_phone.min'                           => "The other phone number must have a minimum of 10 digits",
            'data.attributes.other_phone.numeric'                       => "The other phone number must only contain numbers",

            'data.attributes.email.required'                            => "The email is required",
            'data.attributes.email.email'                               => "The email address is invalid",
            'data.attributes.email.unique'                              => "The email address is already taken",

            'data.attributes.website.url'                               => "The website address is invalid",

            'data.relationships.country.country_id.required'            => "The country is required",
            'data.relationships.country.country_id.exists'              => "The selected country does not exist",
        ];
    }
}

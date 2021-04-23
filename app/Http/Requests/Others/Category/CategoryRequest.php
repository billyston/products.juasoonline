<?php

namespace App\Http\Requests\Others\Category;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class CategoryRequest extends FormRequest
{
    /**
     * @param Validator $validator
     */
    protected function failedValidation( Validator $validator )
    {
        throw new HttpResponseException(
            response() -> json([ 'status' => 'Error', 'code' => Response::HTTP_UNPROCESSABLE_ENTITY, 'errors' => $validator -> errors() -> all() ])
        );
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
                'data'                                                              => [ 'required' ],
                'data.id'                                                           => [ 'required', 'string', 'exists:categories,id' ],
                'data.type'                                                         => [ 'required', 'string', 'in:Category' ],

                'data.attributes.name'                                              => [ 'sometimes', 'string', 'unique:categories,name' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:Category' ],

            'data.attributes.name'                                                  => [ 'required', 'string', 'unique:categories,name' ],
            'data.attributes.description'                                           => [ 'sometimes', 'string' ],

            'data.relationships.group.group_id'                                     => [ 'required', 'string', 'exists:groups,id' ],
        ];
    }
}

<?php

namespace App\Http\Requests\Others\Group;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
                'data.id'                                                           => [ 'required', 'string', 'exists:groups,id' ],
                'data.type'                                                         => [ 'required', 'string', 'in:Group' ],

                'data.attributes.name'                                              => [ 'sometimes', 'string', 'unique:groups,name' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:Group' ],

            'data.attributes.name'                                                  => [ 'required', 'string', 'unique:groups,name' ],
        ];
    }
}

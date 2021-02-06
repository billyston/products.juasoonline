<?php

namespace App\Http\Requests\File;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                              => [ 'required' ],
                'data.id'                                                           => [ 'required', 'string', 'exists:files,id' ],
                'data.type'                                                         => [ 'required', 'string', 'in:File' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:File' ],

            'data.attributes.title.*.title'                                         => [ 'required', 'string' ],
            'data.attributes.title.*.description'                                   => [ 'sometimes', 'string' ],
            'data.attributes.title.*.path'                                          => [ 'required', 'string' ],

            'data.relationships.product'                                            => [ 'required' ],
            'data.relationships.product.type'                                       => [ 'required', 'in:Product' ],
            'data.relationships.product.attributes.product_id'                      => [ 'required', 'string' ],
        ];
    }
}

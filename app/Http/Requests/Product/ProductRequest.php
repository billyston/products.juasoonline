<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
    public function rules() : array
    {
        if ( in_array( $this -> getMethod (), [ 'PUT', 'PATCH' ] ) )
        {
            return $rules =
            [
                'data'                                                              => [ 'required' ],
                'data.id'                                                           => [ 'required', 'string', 'exists:products,id' ],
                'data.type'                                                         => [ 'required', 'string', 'in:Product' ],
            ];
        }
        return
        [
            'data'                                                                  => [ 'required' ],
            'data.type'                                                             => [ 'required', 'string', 'in:Product' ],

            'data.attributes.name'                                                  => [ 'required', 'string' ],
            'data.attributes.sales_price'                                           => [ 'sometimes', 'string' ],
            'data.attributes.price'                                                 => [ 'required', 'string' ],

            'data.relationships.store.store_id'                                     => [ 'required', 'string', 'exists:stores,id' ],

            'data.relationships.categories'                                         => [ 'required' ],
            'data.relationships.categories.data'                                    => [ 'required' ],
            'data.relationships.categories.data.*.type'                             => [ 'required', 'in:Category' ],
            'data.relationships.categories.data.*.category_id'                      => [ 'required', 'string', 'exists:subcategories,id' ],
        ];
    }
}

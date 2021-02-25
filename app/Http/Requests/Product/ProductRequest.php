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
//        logger() -> debug( $this -> all() );
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
                'data.id'                                               => [ 'required', 'string', 'exists:products,id' ],
                'data.type'                                             => [ 'required', 'string', 'in:Product' ],
            ];
        }
        return
        [
            'data'                                                      => [ 'required' ],
            'data.type'                                                 => [ 'required', 'string', 'in:Product' ],

            // Validate product attributes
            'data.attributes.name'                                      => [ 'required', 'string' ],
            'data.attributes.quantity'                                  => [ 'required', 'numeric' ],
            'data.attributes.price'                                     => [ 'sometimes', 'numeric', 'regex:/^\d*(\.\d{2})?$/' ],
            'data.attributes.sales_price'                               => [ 'required', 'numeric', 'regex:/^\d*(\.\d{2})?$/' ],

            // Validate product relationship with store
            'data.relationships.store.store_id'                         => [ 'required', 'string', 'exists:stores,id' ],

            // Validate product relationship with brand
            // Coming soon

            // Validate product categories and relations
            'data.relationships.categories'                             => [ 'required' ],
            'data.relationships.categories.data'                        => [ 'required' ],
            'data.relationships.categories.data.*.type'                 => [ 'required', 'in:Category' ],
            'data.relationships.categories.data.*.category_id'          => [ 'required', 'string', 'exists:subcategories,id' ],

            // Validate product specifications and relations
            'data.relationships.specifications'                         => [ 'sometimes' ],
            'data.relationships.specifications.data'                    => [ 'sometimes' ],
            'data.relationships.specifications.data.*.specification'    => [ 'sometimes' ],
            'data.relationships.specifications.data.*.value'            => [ 'sometimes' ],

            // Validate product overviews and relations
            'data.relationships.overviews'                              => [ 'sometimes' ],
            'data.relationships.overviews.data'                         => [ 'sometimes' ],
            'data.relationships.overviews.data.*.specification'         => [ 'sometimes' ],
            'data.relationships.overviews.data.*.description'           => [ 'sometimes' ],
            'data.relationships.overviews.data.*.file_path'             => [ 'sometimes' ],

            // Validate product files and relations
            'data.relationships.files'                                  => [ 'sometimes' ],
            'data.relationships.files.data'                             => [ 'sometimes' ],
            'data.relationships.files.data.*.file'                      => [ 'sometimes' ],
            'data.relationships.files.data.*.description'               => [ 'sometimes' ],
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

            'data.attributes.name.required'                             => "Name is required",
            'data.attributes.quantity.required'                         => "Quantity is required",
            'data.attributes.quantity.numeric'                          => "Quantity must be of a number type",
            'data.attributes.price.number'                              => "Prices must be of a number type",
            'data.attributes.sales_price.required'                      => "Sales price is required",
            'data.attributes.sales_price.number'                        => "Sales price must be of a number type",

            'data.specifications.data.*.specification.required'         => "All specification attribute are required",
            'data.specifications.data.*.value.required'                 => "All specification value are required",
        ];
    }
}

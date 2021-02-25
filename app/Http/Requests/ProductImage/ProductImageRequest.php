<?php

namespace App\Http\Requests\ProductImage;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            ];
        }
        return
        [
            'product_id'                            => [ 'required', 'string', 'exists:products,id' ],
            'file.*'                                => [ 'required', 'mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf', 'max:2048' ]
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages(): array
    {
        return
        [
            'product_id.required'                   => "The product id is required",
            'product_id.exists'                     => "The product id does not exist",

            'file.*.required'                       => "Image(s) are required",
            'file.*.mimes'                          => "Image(s) must be .jpg, jpeg, or png",

        ];
    }
}

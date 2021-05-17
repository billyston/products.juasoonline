<?php

namespace App\Http\Resources\Store;

use App\Http\Resources\Others\Country\CountryResource;
use App\Http\Resources\Store\Branch\BranchResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Store\StoreAdministrator\StoreAdministratorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray( $request ) : array
    {
        return
        [
            'id'                    => $this -> id,
            'type'                  => 'Store',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'name'              => $this -> resource -> name,
                'doing_business_as' => $this -> resource -> doing_business_as,

                'region'            => $this -> resource -> region,
                'city'              => $this -> resource -> city,
                'address'           => $this -> resource -> address,
                'postal_code'       => $this -> resource -> postal_code,

                'mobile_phone'      => $this -> resource -> mobile_phone,
                'other_phone'       => $this -> resource -> other_phone,

                'email'             => $this -> resource -> email,
                'website'           => $this -> resource -> website,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'country' ) || $this -> relationLoaded( 'administrator' ) || $this -> relationLoaded( 'branches' ) || $this -> relationLoaded( 'products' ),
            [
                'country'           => new CountryResource( $this -> whenLoaded( 'country' ) ),
                'administrator'     => new StoreAdministratorResource( $this -> whenLoaded( 'administrator' ) ),
                'branches'          => BranchResource::collection( $this -> whenLoaded( 'branches' ) ),
                'products'          => ProductResource::collection( $this -> whenLoaded( 'products' ) ),
            ])
        ];
    }
}

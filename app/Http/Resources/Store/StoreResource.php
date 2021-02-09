<?php

namespace App\Http\Resources\Store;

use App\Http\Resources\Branch\BranchResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\StoreAdministrator\StoreAdministratorResource;
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
                'resource_id'       => $this -> resource_id,

                'store_name'        => $this -> store_name,
                'region'            => $this -> region,
                'city'              => $this -> city,
                'address'           => $this -> address,
                'postal_code'       => $this -> postal_code,

                'mobile_phone'      => $this -> mobile_phone,
                'other_phone'       => $this -> other_phone,

                'email'             => $this -> email,
                'website'           => $this -> website,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'administrator' ) || $this -> relationLoaded( 'branches' ) || $this -> relationLoaded( 'products' ),
            [
                'administrator'     => new StoreAdministratorResource( $this -> whenLoaded( 'administrator' ) ),
                'branches'          => BranchResource::collection( $this -> whenLoaded( 'branches' ) ),
                'products'          => ProductResource::collection( $this -> whenLoaded( 'products' ) ),
            ])
        ];
    }
}

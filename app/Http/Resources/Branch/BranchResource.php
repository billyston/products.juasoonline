<?php

namespace App\Http\Resources\Branch;

use App\Http\Resources\Store\StoreResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded( string $string )
 */
class BranchResource extends JsonResource
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
            'type'                  => 'StoreBranch',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'branch_name'       => $this -> branch_name,
                'region'            => $this -> region,
                'city'              => $this -> city,
                'address'           => $this -> address,
                'postal_code'       => $this -> postal_code,

                'mobile_phone'      => $this -> mobile_phone,
                'other_phone'       => $this -> other_phone,

                'email'             => $this -> email,

                'created_at'        => $this -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'store' ),
            [
                'store'             => new StoreResource( $this -> whenLoaded( 'store' ) ),
            ])
        ];
    }
}

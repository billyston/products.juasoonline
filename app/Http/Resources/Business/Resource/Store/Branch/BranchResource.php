<?php

namespace App\Http\Resources\Business\Resource\Store\Branch;

use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
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
            'id'                    => $this -> resource -> id,
            'type'                  => 'Branch',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'branch_name'       => $this -> resource -> branch_name,
                'region'            => $this -> resource -> region,
                'city'              => $this -> resource -> city,
                'address'           => $this -> resource -> address,
                'postal_code'       => $this -> resource -> postal_code,

                'mobile_phone'      => $this -> resource -> mobile_phone,
                'other_phone'       => $this -> resource -> other_phone,

                'email'             => $this -> resource -> email,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'store' ),
            [
                'store'             => new StoreResource( $this -> whenLoaded( 'store' ) ),
            ])
        ];
    }
}

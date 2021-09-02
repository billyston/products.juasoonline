<?php

namespace App\Http\Resources\Business\Resource\Store\StoreAdministrator;

use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class StoreAdministratorResource extends JsonResource
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
            'type'                  => 'StoreAdministrator',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'first_name'        => $this -> resource -> first_name,
                'other_names'       => $this -> resource -> other_names,
                'last_name'         => $this -> resource -> last_name,

                'designation'       => $this -> resource -> designation,

                'email'             => $this -> resource -> email,
                'mobile_phone'      => $this -> resource -> mobile_phone,
                'office_phone'      => $this -> resource -> office_phone,

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

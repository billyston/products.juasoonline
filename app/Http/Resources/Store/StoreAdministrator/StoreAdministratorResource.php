<?php

namespace App\Http\Resources\Store\StoreAdministrator;

use App\Http\Resources\Store\StoreResource;
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
            'id'                    => $this -> id,
            'type'                  => 'StoreAdministrator',

            'attributes' =>
            [
                'resource_id'       => $this -> resource_id,

                'first_name'        => $this -> first_name,
                'other_names'       => $this -> other_names,
                'last_name'         => $this -> last_name,

                'designation'       => $this -> designation,

                'email'             => $this -> email,
                'mobile_phone'      => $this -> mobile_phone,
                'office_phone'      => $this -> office_phone,

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

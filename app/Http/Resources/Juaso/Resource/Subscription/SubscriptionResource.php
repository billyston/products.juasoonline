<?php

namespace App\Http\Resources\Juaso\Resource\Subscription;

use App\Http\Resources\Business\Resource\Store\Store\StoreResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method relationLoaded(string $string)
 */
class SubscriptionResource extends JsonResource
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
            'types'                 => 'Subscription',

            'attributes' =>
            [
                'resource_id'       => $this -> resource -> resource_id,

                'subscription'      => $this -> resource -> subscription,
                'description'       => $this -> resource -> description,

                'created_at'        => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'        => $this -> resource -> updated_at -> toDateTimeString(),
            ],

            'include'               => $this -> when( $this -> relationLoaded( 'stores' ),
            [
                'stores'            => StoreResource::collection( $this -> whenLoaded('stores') ),
            ])
        ];
    }
}

<?php

namespace App\Http\Resources\Juasoonline\Resource\Customer\Stats;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StatsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|mixed
     */
    public function toArray( $request ) : array
    {
        return
        [
            'type'                          => 'Stats',

            'attributes' =>
            [
                'wishlists'                 => count( $this -> resource -> wishlists ),
                'carts'                     => count( $this -> resource -> carts ),
                'stores'                    => count( $this -> resource -> stores ),
            ]
        ];
    }
}

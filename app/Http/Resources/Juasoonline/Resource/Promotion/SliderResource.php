<?php

namespace App\Http\Resources\Juasoonline\Resource\Promotion;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
            'id'                            => $this -> resource -> id,
            'type'                          => 'Promotion',

            'attributes' =>
            [
                'resource_id'               => $this -> resource -> resource_id,

                'promo_start'               => Carbon::parse( $this -> resource -> promo_start ) -> diffForHumans(),
                'promo_end'                 => Carbon::parse( $this -> resource -> promo_end ) -> diffForHumans(),
                'status'                    => $this -> resource -> status,

                'image'                     => $this -> resource -> image,

                'created_at'                => $this -> resource -> created_at -> toDateTimeString(),
                'updated_at'                => $this -> resource -> updated_at -> toDateTimeString(),
            ]
        ];
    }
}

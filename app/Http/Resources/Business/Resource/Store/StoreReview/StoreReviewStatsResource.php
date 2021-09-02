<?php

namespace App\Http\Resources\Business\Resource\Store\StoreReview;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreReviewStatsResource extends JsonResource
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
            'type'                          => 'StoreReviewStats',

            'attributes' =>                 $this -> resource,
        ];
    }
}

<?php

namespace App\Repositories\Juasoonline\Resource;

use Illuminate\Http\JsonResponse;

interface JuasoonlineRepositoryInterface
{

    /**
     * @return array|mixed
     */
    public function quickDeals() : JsonResponse;

    /**
     * @return array|mixed
     */
    public function sliderAds() : JsonResponse;
}

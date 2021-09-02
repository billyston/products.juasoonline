<?php

namespace App\Repositories\Juasoonline\Resource;

use App\Http\Resources\Juasoonline\Resource\Promotion\PromotionResource;
use App\Http\Resources\Juasoonline\Resource\Promotion\SliderResource;

use App\Models\Business\Product\Promotion\Promotion;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JuasoonlineRepository implements JuasoonlineRepositoryInterface
{
    use apiResponseBuilder, Relatives;


    /**
     * @return JsonResponse
     */
    public function sliderAds() : JsonResponse
    {
        $deals = Promotion::where('promo_type_id', '=', 2 ) -> where('status', '=', 000) -> get();
        return $this -> successResponse( SliderResource::collection( $deals ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @return JsonResponse
     */
    public function quickDeals() : JsonResponse
    {
        $deals = Promotion::where( 'promo_type_id', '=', 3 ) -> where('status', '=', 000 ) -> get();
        return $this -> successResponse( PromotionResource::collection( $deals ), "Success", null, Response::HTTP_OK );
    }
}

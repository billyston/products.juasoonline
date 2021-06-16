<?php

namespace App\Repositories\Juasoonline;

use App\Models\Product\Product;
use App\Models\Store\Store;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface JuasoonlineRepositoryInterface
{
    /**
     * @return AnonymousResourceCollection
     */
    public function products() : AnonymousResourceCollection;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function product( Product $product ) : JsonResponse;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function recommendations( Request $request ) : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function storeProducts( Store $store ) : JsonResponse;

    /**
     * @param Product $product
     * @return AnonymousResourceCollection
     */
    public function storeRecommendations( Product $product ) : AnonymousResourceCollection;

    /**
     * @return array|mixed
     */
    public function deals() : JsonResponse;

    /**
     * @return array|mixed
     */
    public function storeAds() : JsonResponse;

    /**
     * @return array|mixed
     */
    public function categories() : JsonResponse;
}

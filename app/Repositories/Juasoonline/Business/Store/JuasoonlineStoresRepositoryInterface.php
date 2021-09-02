<?php

namespace App\Repositories\Juasoonline\Business\Store;

use App\Models\Business\Store\Store\Store;
use App\Models\Business\Product\Product\Product;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface JuasoonlineStoresRepositoryInterface
{
    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function getStore( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function getStoreProducts( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @param Product $product
     * @return AnonymousResourceCollection
     */
    public function getStoreRecommendations( Store $store, Product $product ) : AnonymousResourceCollection;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function getStoreTopSelling( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function getStoreStats( Store $store ) : JsonResponse;
}

<?php

namespace App\Repositories\Juasoonline;

use App\Models\Product\Product;
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
}

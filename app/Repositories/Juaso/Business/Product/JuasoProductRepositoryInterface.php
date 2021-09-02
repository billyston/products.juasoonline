<?php

namespace App\Repositories\Juaso\Business\Product;

use App\Models\Business\Product\Product\Product;
use Illuminate\Http\JsonResponse;

interface JuasoProductRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy( Product $product ) : JsonResponse;
}

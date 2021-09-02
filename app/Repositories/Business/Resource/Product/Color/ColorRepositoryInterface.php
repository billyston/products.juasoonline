<?php

namespace App\Repositories\Business\Resource\Product\Color;

use App\Http\Requests\Business\Resource\Product\Color\ColorRequest;
use App\Models\Business\Product\Color\Color;
use App\Models\Business\Product\Product\Product;
use Illuminate\Http\JsonResponse;

interface ColorRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @param ColorRequest $colorRequest
     * @return JsonResponse
     */
    public function store( Product $product, ColorRequest $colorRequest ) : JsonResponse;

    /**
     * @param Color $color
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product, Color $color ) : JsonResponse;

    /**
     * @param Product $product
     * @param ColorRequest $colorRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update( Product $product, ColorRequest $colorRequest, Color $color ) : JsonResponse;

    /**
     * @param Product $product
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy( Product $product, Color $color ) : JsonResponse;
}

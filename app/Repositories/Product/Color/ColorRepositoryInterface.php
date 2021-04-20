<?php

namespace App\Repositories\Product\Color;

use App\Http\Requests\Product\Color\ColorRequest;
use App\Models\Product\Color\Color;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;

interface ColorRepositoryInterface
{
    /**
     * @param Product $theProduct
     * @return JsonResponse
     */
    public function index( Product $theProduct ) : JsonResponse;

    /**
     * @param ColorRequest $colorRequest
     * @param Product $theProduct
     * @return JsonResponse
     */
    public function store( ColorRequest $colorRequest, Product $theProduct ) : JsonResponse;

    /**
     * @param Color $color
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Color $color, Product $product ) : JsonResponse;

    /**
     * @param ColorRequest $colorRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update( ColorRequest $colorRequest, Color $color ) : JsonResponse;

    /**
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy( Color $color ) : JsonResponse;
}

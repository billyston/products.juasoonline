<?php

namespace App\Repositories\Business\Resource\Product\Size;

use App\Http\Requests\Business\Resource\Product\Size\SizeRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Size\Size;

use Illuminate\Http\JsonResponse;

interface SizeRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @param SizeRequest $sizeRequest
     * @return JsonResponse
     */
    public function store( Product $product, SizeRequest $sizeRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Size $size
     * @return JsonResponse
     */
    public function show( Product $product, Size $size ) : JsonResponse;

    /**
     * @param Product $product
     * @param SizeRequest $sizeRequest
     * @param Size $size
     * @return JsonResponse
     */
    public function update( Product $product, SizeRequest $sizeRequest, Size $size ) : JsonResponse;

    /**
     * @param Product $product
     * @param Size $size
     * @return JsonResponse
     */
    public function destroy( Product $product, Size $size ) : JsonResponse;
}

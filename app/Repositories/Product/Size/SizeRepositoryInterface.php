<?php

namespace App\Repositories\Product\Size;

use App\Http\Requests\Product\Size\SizeRequest;
use App\Models\Product\Product;
use App\Models\Product\Size\Size;
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
     * @param Size $size
     * @return JsonResponse
     */
    public function show( Size $size ) : JsonResponse;

    /**
     * @param SizeRequest $sizeRequest
     * @param Size $size
     * @return JsonResponse
     */
    public function update( SizeRequest $sizeRequest, Size $size ) : JsonResponse;

    /**
     * @param Size $size
     * @return JsonResponse
     */
    public function destroy( Size $size ) : JsonResponse;
}

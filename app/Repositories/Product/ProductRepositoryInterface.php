<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;

interface ProductRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param ProductRequest $productRequest
     * @return mixed
     */
    public function store( ProductRequest $productRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product ) : JsonResponse;

    /**
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function update( ProductRequest $productRequest, Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function delete( Product $product ) : JsonResponse;
}

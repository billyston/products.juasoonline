<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;
use App\Models\Store\Store;
use Illuminate\Http\JsonResponse;

interface ProductRepositoryInterface
{
    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * @param ProductRequest $productRequest
     * @param Store $store
     * @return mixed
     */
    public function store( Store $store, ProductRequest $productRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Store $store
     * @return JsonResponse
     */
    public function show( Store $store, Product $product ) : JsonResponse;

    /**
     * @param Store $store
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function update( Store $store, ProductRequest $productRequest, Product $product ) : JsonResponse;

    /**
     * @param Store $store
     * @param Product $product
     * @return JsonResponse
     */
    public function delete( Store $store, Product $product ) : JsonResponse;
}

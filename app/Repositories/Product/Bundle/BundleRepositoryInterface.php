<?php

namespace App\Repositories\Product\Bundle;

use App\Http\Requests\Product\Bundle\BundleRequest;
use App\Models\Product\Bundle\Bundle;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;

interface BundleRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @param BundleRequest $bundleRequest
     * @return JsonResponse
     */
    public function store( Product $product, BundleRequest $bundleRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function show( Product $product, Bundle $bundle ) : JsonResponse;

    /**
     * @param Product $product
     * @param BundleRequest $bundleRequest
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function update( Product $product, BundleRequest $bundleRequest, Bundle $bundle ) : JsonResponse;

    /**
     * @param Product $product
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function destroy( Product $product, Bundle $bundle ) : JsonResponse;
}

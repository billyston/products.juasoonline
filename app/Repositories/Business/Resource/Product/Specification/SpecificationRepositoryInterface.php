<?php

namespace App\Repositories\Business\Resource\Product\Specification;

use App\Http\Requests\Business\Resource\Product\Specification\SpecificationRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Specification\Specification;

use Illuminate\Http\JsonResponse;

interface SpecificationRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param SpecificationRequest $specificationRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( Product $product, SpecificationRequest $specificationRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Specification $specification
     * @return JsonResponse
     */
    public function show( Product $product, Specification $specification ) : JsonResponse;

    /**
     * @param Product $product
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     * @return JsonResponse
     */
    public function update( Product $product, SpecificationRequest $specificationRequest, Specification $specification ) : JsonResponse;

    /**
     * @param Product $product
     * @param Specification $specification
     * @return JsonResponse
     */
    public function destroy( Product $product, Specification $specification ) : JsonResponse;
}

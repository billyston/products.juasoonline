<?php

namespace App\Repositories\Product\Specification;

use App\Http\Requests\Product\Specification\SpecificationRequest;
use App\Models\Product\Product;
use App\Models\Product\Specification\Specification;
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
     * @param Specification $specification
     * @return JsonResponse
     */
    public function show( Specification $specification ) : JsonResponse;

    /**
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     * @return JsonResponse
     */
    public function update( SpecificationRequest $specificationRequest, Specification $specification ) : JsonResponse;

    /**
     * @param Specification $specification
     * @return JsonResponse
     */
    public function destroy( Specification $specification ) : JsonResponse;
}

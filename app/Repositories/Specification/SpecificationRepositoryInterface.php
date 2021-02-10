<?php

namespace App\Repositories\Specification;

use App\Http\Requests\Specification\SpecificationRequest;
use App\Models\Specification\Specification;
use Illuminate\Http\JsonResponse;

interface SpecificationRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param SpecificationRequest $specificationRequest
     * @return JsonResponse
     */
    public function store( SpecificationRequest $specificationRequest ) : JsonResponse;

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

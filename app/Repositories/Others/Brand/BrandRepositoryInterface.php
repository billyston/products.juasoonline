<?php

namespace App\Repositories\Others\Brand;

use App\Http\Requests\Others\Brand\BrandRequest;
use App\Models\Others\Brand\Brand;
use Illuminate\Http\JsonResponse;

interface BrandRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse;

    /**
     * @param BrandRequest $brandRequest
     * @return JsonResponse
     */
    public function store( BrandRequest $brandRequest ) : JsonResponse;

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function show( Brand $brand ) : JsonResponse;

    /**
     * @param BrandRequest $brandRequest
     * @param Brand $brand
     * @return JsonResponse
     */
    public function update( BrandRequest $brandRequest, Brand $brand ) : JsonResponse;

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function destroy( Brand $brand ) : JsonResponse;
}

<?php

namespace App\Repositories\Business\Juaso\Brand;

use App\Models\Juaso\Brand\Brand;
use Illuminate\Http\JsonResponse;

interface JuasoBrandRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Brand $brand
     * @return JsonResponse
     */
    public function show( Brand $brand ) : JsonResponse;
}

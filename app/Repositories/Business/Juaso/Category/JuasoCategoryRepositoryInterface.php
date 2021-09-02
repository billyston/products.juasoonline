<?php

namespace App\Repositories\Business\Juaso\Category;

use App\Models\Juaso\Category\Category;
use Illuminate\Http\JsonResponse;

interface JuasoCategoryRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function show( Category $category ) : JsonResponse;
}

<?php

namespace App\Repositories\Juasoonline\Juaso\Category;

use App\Models\Juaso\Category\Category;
use Symfony\Component\HttpFoundation\JsonResponse;

interface JuasoonlineCategoryRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function getCategories() : JsonResponse;

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function getCategory( Category $category ) : JsonResponse;
}

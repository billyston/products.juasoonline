<?php

namespace App\Repositories\Juasoonline\Juaso\Subcategory;

use App\Models\Juaso\Subcategory\Subcategory;
use Illuminate\Http\JsonResponse;

interface JuasoonlineSubcategoryRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function getSubcategories() : JsonResponse;

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse
     */
    public function getSubcategory( Subcategory $subcategory ) : JsonResponse;
}

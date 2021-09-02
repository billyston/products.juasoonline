<?php

namespace App\Repositories\Business\Juaso\Subcategory;

use App\Models\Juaso\Subcategory\Subcategory;
use Illuminate\Http\JsonResponse;

interface JuasoSubcategoryRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse
     */
    public function show( Subcategory $subcategory ) : JsonResponse;
}

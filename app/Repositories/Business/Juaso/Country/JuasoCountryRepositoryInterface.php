<?php

namespace App\Repositories\Business\Juaso\Country;

use App\Models\Juaso\Country\Country;
use Illuminate\Http\JsonResponse;

interface JuasoCountryRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Country $country
     * @return JsonResponse
     */
    public function show( Country $country ) : JsonResponse;
}

<?php

namespace App\Repositories\Business\Juaso\PromoType;

use App\Models\Juaso\PromoType\PromoType;
use Illuminate\Http\JsonResponse;

interface JuasoPromoTypeRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function show( PromoType $promoType ) : JsonResponse;
}

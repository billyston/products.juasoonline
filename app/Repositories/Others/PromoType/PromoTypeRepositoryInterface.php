<?php

namespace App\Repositories\Others\PromoType;

use App\Http\Requests\Others\PromoType\PromoTypeRequest;
use App\Models\Others\PromoType\PromoType;
use Illuminate\Http\JsonResponse;

interface PromoTypeRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @return JsonResponse
     */
    public function store( PromoTypeRequest $promoTypeRequest ) : JsonResponse;

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function show( PromoType $promoType ) : JsonResponse;

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function update( PromoTypeRequest $promoTypeRequest, PromoType $promoType ) : JsonResponse;

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function destroy( PromoType $promoType ) : JsonResponse;
}

<?php

namespace App\Repositories\Juaso\Resource\PromoType;

use App\Http\Requests\Juaso\Resource\PromoType\PromoTypeRequest;
use App\Models\Juaso\PromoType\PromoType;

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

<?php

namespace App\Repositories\Juaso\Business\Store\Charge;

use App\Http\Requests\Business\Resource\Store\Charge\ChargeRequest;
use App\Models\Business\Store\Charge\Charge;
use App\Models\Business\Store\Store\Store;
use Illuminate\Http\JsonResponse;

interface JuasoChargeRepositoryInterface
{
    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @return JsonResponse|mixed
     */
    public function store( Store $store, ChargeRequest $chargeRequest ) : JsonResponse;

    /**
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function show( Store $store, Charge $charge ) : JsonResponse;

    /**
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @param Charge $charge
     * @return JsonResponse
     */
    public function update( Store $store, ChargeRequest $chargeRequest, Charge $charge ) : JsonResponse;
}
